<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdatePlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BasicAuthConfiguration $basicAuthConfiguration
 * @property OAuth2ClientCredentialConfiguration $oAuth2ClientCredentialConfiguration
 * @property NoAuthConfiguration $noAuthConfiguration
 * @property IdcAuthConfiguration $idcAuthConfiguration
 */
class PluginAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     basicAuthConfiguration?: BasicAuthConfiguration,
     *     oAuth2ClientCredentialConfiguration?: OAuth2ClientCredentialConfiguration,
     *     noAuthConfiguration?: NoAuthConfiguration,
     *     idcAuthConfiguration?: IdcAuthConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
