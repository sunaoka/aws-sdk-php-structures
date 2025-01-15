<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationHostUrl
 * @property string $applicationServicePath
 * @property int<1, 65535> $portNumber
 * @property string $clientNumber
 * @property string|null $logonLanguage
 * @property string|null $privateLinkServiceName
 * @property OAuthProperties|null $oAuthProperties
 * @property bool|null $disableSSO
 */
class SAPODataConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     applicationHostUrl: string,
     *     applicationServicePath: string,
     *     portNumber: int<1, 65535>,
     *     clientNumber: string,
     *     logonLanguage?: string|null,
     *     privateLinkServiceName?: string|null,
     *     oAuthProperties?: OAuthProperties|null,
     *     disableSSO?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
