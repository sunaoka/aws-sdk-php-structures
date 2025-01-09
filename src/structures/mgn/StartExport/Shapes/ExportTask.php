<?php

namespace Sunaoka\Aws\Structures\mgn\StartExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $creationDateTime
 * @property string $endDateTime
 * @property string $exportID
 * @property float $progressPercentage
 * @property string $s3Bucket
 * @property string $s3BucketOwner
 * @property string $s3Key
 * @property 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED' $status
 * @property ExportTaskSummary $summary
 */
class ExportTask extends Shape
{
    /**
     * @param array{
     *     creationDateTime?: string,
     *     endDateTime?: string,
     *     exportID?: string,
     *     progressPercentage?: float,
     *     s3Bucket?: string,
     *     s3BucketOwner?: string,
     *     s3Key?: string,
     *     status?: 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED',
     *     summary?: ExportTaskSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
