<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 */
class UpdateSchedulerRequest extends Shape
{
    /**
     * @param array{version: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
