<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartRouteAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property Shapes\RouteAnalysisEndpointOptionsSpecification $Source
 * @property Shapes\RouteAnalysisEndpointOptionsSpecification $Destination
 * @property bool $IncludeReturnPath
 * @property bool $UseMiddleboxes
 */
class StartRouteAnalysisRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     Source: Shapes\RouteAnalysisEndpointOptionsSpecification,
     *     Destination: Shapes\RouteAnalysisEndpointOptionsSpecification,
     *     IncludeReturnPath?: bool,
     *     UseMiddleboxes?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
