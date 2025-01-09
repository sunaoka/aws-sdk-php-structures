<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartRouteAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteAnalysisCompletion $CompletionStatus
 * @property list<PathComponent> $Path
 */
class RouteAnalysisPath extends Shape
{
    /**
     * @param array{
     *     CompletionStatus?: RouteAnalysisCompletion,
     *     Path?: list<PathComponent>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
