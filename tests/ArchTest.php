<?php

describe('Arch presets', function (): void {
    arch('Security preset')->preset()->security();
    arch('PHP preset')->preset()->php();
    arch('Laravel preset')->preset()->laravel();
});

describe('Custom relaxed preset', function (): void {
    arch('No final classes')
        ->expect('Prism\Bedrock')
        ->classes()
        ->not
        ->toBeFinal();

    arch('No private methods')
        ->expect('Prism\Bedrock')
        ->classes()
        ->not
        ->toHavePrivateMethods();
});
