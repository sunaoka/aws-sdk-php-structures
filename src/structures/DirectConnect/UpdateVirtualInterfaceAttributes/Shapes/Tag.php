<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateVirtualInterfaceAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string|null $value
 */
class Tag extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
