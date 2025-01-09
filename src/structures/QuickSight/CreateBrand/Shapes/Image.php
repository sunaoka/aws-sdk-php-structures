<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageSource $Source
 * @property string $GeneratedImageUrl
 */
class Image extends Shape
{
    /**
     * @param array{
     *     Source?: ImageSource,
     *     GeneratedImageUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
