<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListOperationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property string|null $ResourceType
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     ResourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
