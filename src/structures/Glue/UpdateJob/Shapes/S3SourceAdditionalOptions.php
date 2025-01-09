<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BoundedSize
 * @property int $BoundedFiles
 */
class S3SourceAdditionalOptions extends Shape
{
    /**
     * @param array{
     *     BoundedSize?: int,
     *     BoundedFiles?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
