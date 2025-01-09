<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property list<string> $imageUris
 */
class Container extends Shape
{
    /**
     * @param array{
     *     region?: string,
     *     imageUris?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
