<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 * @property string|null $entityIdPrefix
 * @property UpdateOpenIdConnectGroupConfiguration|null $groupConfiguration
 * @property UpdateOpenIdConnectTokenSelection $tokenSelection
 */
class UpdateOpenIdConnectConfiguration extends Shape
{
    /**
     * @param array{
     *     issuer: string,
     *     entityIdPrefix?: string|null,
     *     groupConfiguration?: UpdateOpenIdConnectGroupConfiguration|null,
     *     tokenSelection: UpdateOpenIdConnectTokenSelection
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
