<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartRouteAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteAnalysisCompletion|null $CompletionStatus
 * @property list<PathComponent>|null $Path
 */
class RouteAnalysisPath extends Shape
{
    /**
     * @param array{
     *     CompletionStatus?: RouteAnalysisCompletion|null,
     *     Path?: list<PathComponent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
