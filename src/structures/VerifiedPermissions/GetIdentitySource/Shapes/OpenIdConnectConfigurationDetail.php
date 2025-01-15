<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 * @property string|null $entityIdPrefix
 * @property OpenIdConnectGroupConfigurationDetail|null $groupConfiguration
 * @property OpenIdConnectTokenSelectionDetail $tokenSelection
 */
class OpenIdConnectConfigurationDetail extends Shape
{
    /**
     * @param array{
     *     issuer: string,
     *     entityIdPrefix?: string|null,
     *     groupConfiguration?: OpenIdConnectGroupConfigurationDetail|null,
     *     tokenSelection: OpenIdConnectTokenSelectionDetail
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
