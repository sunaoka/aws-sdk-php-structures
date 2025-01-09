<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationHostUrl
 * @property string $applicationServicePath
 * @property int $portNumber
 * @property string $clientNumber
 * @property string $logonLanguage
 * @property string $privateLinkServiceName
 * @property OAuthProperties $oAuthProperties
 * @property bool $disableSSO
 */
class SAPODataConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     applicationHostUrl: string,
     *     applicationServicePath: string,
     *     portNumber: int,
     *     clientNumber: string,
     *     logonLanguage?: string,
     *     privateLinkServiceName?: string,
     *     oAuthProperties?: OAuthProperties,
     *     disableSSO?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
