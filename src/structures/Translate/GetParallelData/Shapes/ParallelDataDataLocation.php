<?php

namespace Sunaoka\Aws\Structures\Translate\GetParallelData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RepositoryType
 * @property string $Location
 */
class ParallelDataDataLocation extends Shape
{
    /**
     * @param array{
     *     RepositoryType: string,
     *     Location: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
