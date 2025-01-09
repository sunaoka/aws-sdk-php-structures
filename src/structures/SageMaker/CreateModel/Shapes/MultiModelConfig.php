<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $ModelCacheSetting
 */
class MultiModelConfig extends Shape
{
    /**
     * @param array{ModelCacheSetting?: 'Enabled'|'Disabled'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
