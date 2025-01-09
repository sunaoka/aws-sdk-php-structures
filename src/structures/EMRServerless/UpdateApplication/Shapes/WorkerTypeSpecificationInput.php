<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageConfigurationInput $imageConfiguration
 */
class WorkerTypeSpecificationInput extends Shape
{
    /**
     * @param array{imageConfiguration?: ImageConfigurationInput} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
