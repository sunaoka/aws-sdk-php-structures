<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdatePlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BasicAuthConfiguration|null $basicAuthConfiguration
 * @property OAuth2ClientCredentialConfiguration|null $oAuth2ClientCredentialConfiguration
 * @property NoAuthConfiguration|null $noAuthConfiguration
 * @property IdcAuthConfiguration|null $idcAuthConfiguration
 */
class PluginAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     basicAuthConfiguration?: BasicAuthConfiguration|null,
     *     oAuth2ClientCredentialConfiguration?: OAuth2ClientCredentialConfiguration|null,
     *     noAuthConfiguration?: NoAuthConfiguration|null,
     *     idcAuthConfiguration?: IdcAuthConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
