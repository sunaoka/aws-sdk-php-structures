<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeClientProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceId
 * @property ClientProperties|null $ClientProperties
 */
class ClientPropertiesResult extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     ClientProperties?: ClientProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
