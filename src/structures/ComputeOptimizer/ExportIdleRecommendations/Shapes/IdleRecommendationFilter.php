<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Finding'|'ResourceType'|null $name
 * @property list<string>|null $values
 */
class IdleRecommendationFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'Finding'|'ResourceType'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
