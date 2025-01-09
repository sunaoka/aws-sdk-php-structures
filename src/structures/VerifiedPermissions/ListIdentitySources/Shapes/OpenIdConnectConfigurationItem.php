<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 * @property string $entityIdPrefix
 * @property OpenIdConnectGroupConfigurationItem $groupConfiguration
 * @property OpenIdConnectTokenSelectionItem $tokenSelection
 */
class OpenIdConnectConfigurationItem extends Shape
{
    /**
     * @param array{
     *     issuer: string,
     *     entityIdPrefix?: string,
     *     groupConfiguration?: OpenIdConnectGroupConfigurationItem,
     *     tokenSelection: OpenIdConnectTokenSelectionItem
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
