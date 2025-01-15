<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3Prefix
 */
class DocumentsMetadataConfiguration extends Shape
{
    /**
     * @param array{S3Prefix?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
