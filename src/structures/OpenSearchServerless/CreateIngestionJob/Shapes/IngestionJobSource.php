<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngestionJobS3Source $s3
 */
class IngestionJobSource extends Shape
{
    /**
     * @param array{s3: IngestionJobS3Source} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
