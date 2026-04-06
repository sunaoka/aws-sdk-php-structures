<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 * @property string|null $entityIdPrefix
 * @property OpenIdConnectGroupConfiguration|null $groupConfiguration
 * @property OpenIdConnectTokenSelection $tokenSelection
 */
class OpenIdConnectConfiguration extends Shape
{
    /**
     * @param array{
     *     issuer: string,
     *     entityIdPrefix?: string|null,
     *     groupConfiguration?: OpenIdConnectGroupConfiguration|null,
     *     tokenSelection: OpenIdConnectTokenSelection
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
