<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $packageName
 * @property string $packageVersion
 */
class ImagePackage extends Shape
{
    /**
     * @param array{
     *     packageName?: string,
     *     packageVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
