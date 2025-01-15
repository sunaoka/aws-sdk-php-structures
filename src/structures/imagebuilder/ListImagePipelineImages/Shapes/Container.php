<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePipelineImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $region
 * @property list<string>|null $imageUris
 */
class Container extends Shape
{
    /**
     * @param array{
     *     region?: string|null,
     *     imageUris?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
