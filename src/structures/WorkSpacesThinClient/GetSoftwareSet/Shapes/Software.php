<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetSoftwareSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $version
 */
class Software extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
