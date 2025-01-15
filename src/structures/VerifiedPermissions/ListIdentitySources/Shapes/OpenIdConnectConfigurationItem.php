<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 * @property string|null $entityIdPrefix
 * @property OpenIdConnectGroupConfigurationItem|null $groupConfiguration
 * @property OpenIdConnectTokenSelectionItem $tokenSelection
 */
class OpenIdConnectConfigurationItem extends Shape
{
    /**
     * @param array{
     *     issuer: string,
     *     entityIdPrefix?: string|null,
     *     groupConfiguration?: OpenIdConnectGroupConfigurationItem|null,
     *     tokenSelection: OpenIdConnectTokenSelectionItem
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
