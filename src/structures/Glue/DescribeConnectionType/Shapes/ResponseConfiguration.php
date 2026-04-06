<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResultPath
 * @property string|null $ErrorPath
 */
class ResponseConfiguration extends Shape
{
    /**
     * @param array{
     *     ResultPath: string,
     *     ErrorPath?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
