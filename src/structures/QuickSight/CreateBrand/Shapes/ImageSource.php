<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PublicUrl
 * @property string|null $S3Uri
 */
class ImageSource extends Shape
{
    /**
     * @param array{
     *     PublicUrl?: string|null,
     *     S3Uri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
