<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageSource|null $Source
 * @property string|null $GeneratedImageUrl
 */
class Image extends Shape
{
    /**
     * @param array{
     *     Source?: ImageSource|null,
     *     GeneratedImageUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
