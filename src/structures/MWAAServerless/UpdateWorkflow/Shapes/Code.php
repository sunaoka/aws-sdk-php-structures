<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\UpdateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location|null $S3Location
 */
class Code extends Shape
{
    /**
     * @param array{S3Location?: S3Location|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
