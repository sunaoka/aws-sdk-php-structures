<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentId
 * @property string $componentType
 * @property string|null $componentArn
 */
class Step extends Shape
{
    /**
     * @param array{
     *     componentId: string,
     *     componentType: string,
     *     componentArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
