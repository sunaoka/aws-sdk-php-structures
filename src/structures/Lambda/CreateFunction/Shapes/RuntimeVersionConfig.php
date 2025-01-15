<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuntimeVersionArn
 * @property RuntimeVersionError|null $Error
 */
class RuntimeVersionConfig extends Shape
{
    /**
     * @param array{
     *     RuntimeVersionArn?: string|null,
     *     Error?: RuntimeVersionError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
