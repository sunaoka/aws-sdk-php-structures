<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BoundedSize
 * @property int|null $BoundedFiles
 */
class S3SourceAdditionalOptions extends Shape
{
    /**
     * @param array{
     *     BoundedSize?: int|null,
     *     BoundedFiles?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
