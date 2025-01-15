<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetSoftwareSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $version
 */
class Software extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
