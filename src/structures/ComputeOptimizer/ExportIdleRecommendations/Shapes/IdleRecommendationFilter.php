<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Finding'|'ResourceType' $name
 * @property list<string> $values
 */
class IdleRecommendationFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'Finding'|'ResourceType',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
