<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Label
 */
class Datatype extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Label: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
