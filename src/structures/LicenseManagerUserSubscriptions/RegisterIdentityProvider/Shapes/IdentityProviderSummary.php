<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\RegisterIdentityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FailureMessage
 * @property IdentityProvider $IdentityProvider
 * @property string|null $IdentityProviderArn
 * @property string $Product
 * @property Settings $Settings
 * @property string $Status
 */
class IdentityProviderSummary extends Shape
{
    /**
     * @param array{
     *     FailureMessage?: string|null,
     *     IdentityProvider: IdentityProvider,
     *     IdentityProviderArn?: string|null,
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
