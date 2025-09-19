<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\UpdateIdentityProviderSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdentityProvider $IdentityProvider
 * @property Settings $Settings
 * @property string $Product
 * @property string $Status
 * @property string|null $IdentityProviderArn
 * @property string|null $FailureMessage
 * @property string|null $OwnerAccountId
 */
class IdentityProviderSummary extends Shape
{
    /**
     * @param array{
     *     IdentityProvider: IdentityProvider,
     *     Settings: Settings,
     *     Product: string,
     *     Status: string,
     *     IdentityProviderArn?: string|null,
     *     FailureMessage?: string|null,
     *     OwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
