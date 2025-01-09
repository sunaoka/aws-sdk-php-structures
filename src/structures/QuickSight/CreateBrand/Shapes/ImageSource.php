<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PublicUrl
 * @property string $S3Uri
 */
class ImageSource extends Shape
{
    /**
     * @param array{
     *     PublicUrl?: string,
     *     S3Uri?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
