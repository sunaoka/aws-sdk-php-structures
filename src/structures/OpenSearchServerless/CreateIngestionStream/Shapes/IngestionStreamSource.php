<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateIngestionStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngestionStreamS3Source $s3
 */
class IngestionStreamSource extends Shape
{
    /**
     * @param array{s3: IngestionStreamS3Source} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
