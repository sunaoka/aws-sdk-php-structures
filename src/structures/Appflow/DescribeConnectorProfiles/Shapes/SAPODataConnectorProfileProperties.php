<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationHostUrl
 * @property string $applicationServicePath
 * @property int<1, 65535> $portNumber
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
     *     portNumber: int<1, 65535>,
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
