<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Finding'|null $name
 * @property list<string>|null $values
 */
class EBSFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'Finding'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
