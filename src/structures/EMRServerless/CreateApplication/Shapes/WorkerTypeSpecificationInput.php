<?php

namespace Sunaoka\Aws\Structures\EMRServerless\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageConfigurationInput|null $imageConfiguration
 */
class WorkerTypeSpecificationInput extends Shape
{
    /**
     * @param array{imageConfiguration?: ImageConfigurationInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
