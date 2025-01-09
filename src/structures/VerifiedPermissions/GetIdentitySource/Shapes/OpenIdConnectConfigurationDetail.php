<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 * @property string $entityIdPrefix
 * @property OpenIdConnectGroupConfigurationDetail $groupConfiguration
 * @property OpenIdConnectTokenSelectionDetail $tokenSelection
 */
class OpenIdConnectConfigurationDetail extends Shape
{
    /**
     * @param array{
     *     issuer: string,
     *     entityIdPrefix?: string,
     *     groupConfiguration?: OpenIdConnectGroupConfigurationDetail,
     *     tokenSelection: OpenIdConnectTokenSelectionDetail
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
