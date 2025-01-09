<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeClientProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property ClientProperties $ClientProperties
 */
class ClientPropertiesResult extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string,
     *     ClientProperties?: ClientProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
