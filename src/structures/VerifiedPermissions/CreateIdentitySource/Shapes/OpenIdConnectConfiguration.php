<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 * @property string $entityIdPrefix
 * @property OpenIdConnectGroupConfiguration $groupConfiguration
 * @property OpenIdConnectTokenSelection $tokenSelection
 */
class OpenIdConnectConfiguration extends Shape
{
    /**
     * @param array{
     *     issuer: string,
     *     entityIdPrefix?: string,
     *     groupConfiguration?: OpenIdConnectGroupConfiguration,
     *     tokenSelection: OpenIdConnectTokenSelection
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
