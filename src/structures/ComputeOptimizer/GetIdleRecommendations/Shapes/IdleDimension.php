<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property list<string>|null $values
 */
class IdleDimension extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
