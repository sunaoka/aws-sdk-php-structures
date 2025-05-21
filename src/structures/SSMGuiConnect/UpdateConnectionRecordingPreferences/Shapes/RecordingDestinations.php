<?php

namespace Sunaoka\Aws\Structures\SSMGuiConnect\UpdateConnectionRecordingPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<S3Bucket> $S3Buckets
 */
class RecordingDestinations extends Shape
{
    /**
     * @param array{S3Buckets: list<S3Bucket>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
