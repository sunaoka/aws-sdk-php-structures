<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuntimeVersionArn
 * @property RuntimeVersionError $Error
 */
class RuntimeVersionConfig extends Shape
{
    /**
     * @param array{
     *     RuntimeVersionArn?: string,
     *     Error?: RuntimeVersionError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
