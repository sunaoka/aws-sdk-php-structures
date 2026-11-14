<?php

namespace Sunaoka\Aws\Structures\Lambda\ListVersionsByFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuntimeArn
 * @property string $RuntimeAlias
 */
class FunctionRuntimeConfig extends Shape
{
    /**
     * @param array{
     *     RuntimeArn: string,
     *     RuntimeAlias: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
