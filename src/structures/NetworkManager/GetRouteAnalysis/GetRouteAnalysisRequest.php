<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetRouteAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $RouteAnalysisId
 */
class GetRouteAnalysisRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     RouteAnalysisId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
