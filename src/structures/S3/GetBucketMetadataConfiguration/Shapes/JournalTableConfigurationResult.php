<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketMetadataConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableStatus
 * @property ErrorDetails|null $Error
 * @property string $TableName
 * @property string|null $TableArn
 * @property RecordExpiration $RecordExpiration
 */
class JournalTableConfigurationResult extends Shape
{
    /**
     * @param array{
     *     TableStatus: string,
     *     Error?: ErrorDetails|null,
     *     TableName: string,
     *     TableArn?: string|null,
     *     RecordExpiration: RecordExpiration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
