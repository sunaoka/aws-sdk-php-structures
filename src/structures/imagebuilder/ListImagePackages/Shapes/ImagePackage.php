<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $packageName
 * @property string|null $packageVersion
 */
class ImagePackage extends Shape
{
    /**
     * @param array{
     *     packageName?: string|null,
     *     packageVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
