<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Finding' $name
 * @property list<string> $values
 */
class EBSFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'Finding',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
