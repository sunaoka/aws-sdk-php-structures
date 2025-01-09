<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\UpdateIdentityProviderSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FailureMessage
 * @property IdentityProvider $IdentityProvider
 * @property string $IdentityProviderArn
 * @property string $Product
 * @property Settings $Settings
 * @property string $Status
 */
class IdentityProviderSummary extends Shape
{
    /**
     * @param array{
     *     FailureMessage?: string,
     *     IdentityProvider: IdentityProvider,
     *     IdentityProviderArn?: string,
     *     Product: string,
     *     Settings: Settings,
     *     Status: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
