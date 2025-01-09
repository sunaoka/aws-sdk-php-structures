<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListOperationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property string $ResourceType
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     ResourceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
