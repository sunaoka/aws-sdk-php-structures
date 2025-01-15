<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartRouteAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GlobalNetworkId
 * @property string|null $OwnerAccountId
 * @property string|null $RouteAnalysisId
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property 'RUNNING'|'COMPLETED'|'FAILED'|null $Status
 * @property RouteAnalysisEndpointOptions|null $Source
 * @property RouteAnalysisEndpointOptions|null $Destination
 * @property bool|null $IncludeReturnPath
 * @property bool|null $UseMiddleboxes
 * @property RouteAnalysisPath|null $ForwardPath
 * @property RouteAnalysisPath|null $ReturnPath
 */
class RouteAnalysis extends Shape
{
    /**
     * @param array{
     *     GlobalNetworkId?: string|null,
     *     OwnerAccountId?: string|null,
     *     RouteAnalysisId?: string|null,
     *     StartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'RUNNING'|'COMPLETED'|'FAILED'|null,
     *     Source?: RouteAnalysisEndpointOptions|null,
     *     Destination?: RouteAnalysisEndpointOptions|null,
     *     IncludeReturnPath?: bool|null,
     *     UseMiddleboxes?: bool|null,
     *     ForwardPath?: RouteAnalysisPath|null,
     *     ReturnPath?: RouteAnalysisPath|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
