<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 * @property string $entityIdPrefix
 * @property UpdateOpenIdConnectGroupConfiguration $groupConfiguration
 * @property UpdateOpenIdConnectTokenSelection $tokenSelection
 */
class UpdateOpenIdConnectConfiguration extends Shape
{
    /**
     * @param array{
     *     issuer: string,
     *     entityIdPrefix?: string,
     *     groupConfiguration?: UpdateOpenIdConnectGroupConfiguration,
     *     tokenSelection: UpdateOpenIdConnectTokenSelection
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
