<?php

namespace Sunaoka\Aws\Structures\mgn\StartExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $creationDateTime
 * @property string|null $endDateTime
 * @property string|null $exportID
 * @property float|null $progressPercentage
 * @property string|null $s3Bucket
 * @property string|null $s3BucketOwner
 * @property string|null $s3Key
 * @property 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED'|null $status
 * @property ExportTaskSummary|null $summary
 */
class ExportTask extends Shape
{
    /**
     * @param array{
     *     creationDateTime?: string|null,
     *     endDateTime?: string|null,
     *     exportID?: string|null,
     *     progressPercentage?: float|null,
     *     s3Bucket?: string|null,
     *     s3BucketOwner?: string|null,
     *     s3Key?: string|null,
     *     status?: 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED'|null,
     *     summary?: ExportTaskSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
