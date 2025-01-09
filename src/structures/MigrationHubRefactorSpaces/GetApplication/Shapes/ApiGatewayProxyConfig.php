<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiGatewayId
 * @property 'REGIONAL'|'PRIVATE' $EndpointType
 * @property string $NlbArn
 * @property string $NlbName
 * @property string $ProxyUrl
 * @property string $StageName
 * @property string $VpcLinkId
 */
class ApiGatewayProxyConfig extends Shape
{
    /**
     * @param array{
     *     ApiGatewayId?: string,
     *     EndpointType?: 'REGIONAL'|'PRIVATE',
     *     NlbArn?: string,
     *     NlbName?: string,
     *     ProxyUrl?: string,
     *     StageName?: string,
     *     VpcLinkId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
