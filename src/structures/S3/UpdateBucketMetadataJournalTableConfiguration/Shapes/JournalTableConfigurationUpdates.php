<?php

namespace Sunaoka\Aws\Structures\S3\UpdateBucketMetadataJournalTableConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecordExpiration $RecordExpiration
 */
class JournalTableConfigurationUpdates extends Shape
{
    /**
     * @param array{RecordExpiration: RecordExpiration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
