<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetIngestionStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Statistics|null $s3
 */
class IngestionStatistics extends Shape
{
    /**
     * @param array{s3?: S3Statistics|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
