<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'JSON'|null $s3InputFileType
 */
class S3InputFormatConfig extends Shape
{
    /**
     * @param array{s3InputFileType?: 'CSV'|'JSON'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
