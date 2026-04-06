<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $value
 */
class HeaderTagAction extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
