<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApiGatewayId
 * @property 'REGIONAL'|'PRIVATE'|null $EndpointType
 * @property string|null $NlbArn
 * @property string|null $NlbName
 * @property string|null $ProxyUrl
 * @property string|null $StageName
 * @property string|null $VpcLinkId
 */
class ApiGatewayProxySummary extends Shape
{
    /**
     * @param array{
     *     ApiGatewayId?: string|null,
     *     EndpointType?: 'REGIONAL'|'PRIVATE'|null,
     *     NlbArn?: string|null,
     *     NlbName?: string|null,
     *     ProxyUrl?: string|null,
     *     StageName?: string|null,
     *     VpcLinkId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
