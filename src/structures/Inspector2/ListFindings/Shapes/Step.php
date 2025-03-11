<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $componentArn
 * @property string $componentId
 * @property string $componentType
 */
class Step extends Shape
{
    /**
     * @param array{
     *     componentArn?: string|null,
     *     componentId: string,
     *     componentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
