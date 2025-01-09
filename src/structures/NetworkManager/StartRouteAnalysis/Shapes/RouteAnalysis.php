<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartRouteAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlobalNetworkId
 * @property string $OwnerAccountId
 * @property string $RouteAnalysisId
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property 'RUNNING'|'COMPLETED'|'FAILED' $Status
 * @property RouteAnalysisEndpointOptions $Source
 * @property RouteAnalysisEndpointOptions $Destination
 * @property bool $IncludeReturnPath
 * @property bool $UseMiddleboxes
 * @property RouteAnalysisPath $ForwardPath
 * @property RouteAnalysisPath $ReturnPath
 */
class RouteAnalysis extends Shape
{
    /**
     * @param array{
     *     GlobalNetworkId?: string,
     *     OwnerAccountId?: string,
     *     RouteAnalysisId?: string,
     *     StartTimestamp?: \Aws\Api\DateTimeResult,
     *     Status?: 'RUNNING'|'COMPLETED'|'FAILED',
     *     Source?: RouteAnalysisEndpointOptions,
     *     Destination?: RouteAnalysisEndpointOptions,
     *     IncludeReturnPath?: bool,
     *     UseMiddleboxes?: bool,
     *     ForwardPath?: RouteAnalysisPath,
     *     ReturnPath?: RouteAnalysisPath
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
