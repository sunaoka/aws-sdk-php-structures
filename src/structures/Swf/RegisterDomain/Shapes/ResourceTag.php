<?php

namespace Sunaoka\Aws\Structures\Swf\RegisterDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $value
 */
class ResourceTag extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
