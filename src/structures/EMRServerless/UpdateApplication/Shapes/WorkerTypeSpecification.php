<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageConfiguration|null $imageConfiguration
 */
class WorkerTypeSpecification extends Shape
{
    /**
     * @param array{imageConfiguration?: ImageConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
