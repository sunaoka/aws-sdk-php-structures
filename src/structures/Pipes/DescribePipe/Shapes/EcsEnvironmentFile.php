<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 's3' $type
 * @property string $value
 */
class EcsEnvironmentFile extends Shape
{
    /**
     * @param array{
     *     type: 's3',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
