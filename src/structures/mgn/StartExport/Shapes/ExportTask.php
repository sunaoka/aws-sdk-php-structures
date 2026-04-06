<?php

namespace Sunaoka\Aws\Structures\mgn\StartExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $exportID
 * @property string|null $arn
 * @property string|null $s3Bucket
 * @property string|null $s3Key
 * @property string|null $s3BucketOwner
 * @property string|null $creationDateTime
 * @property string|null $endDateTime
 * @property 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED'|null $status
 * @property float|null $progressPercentage
 * @property ExportTaskSummary|null $summary
 * @property array<string, string>|null $tags
 */
class ExportTask extends Shape
{
    /**
     * @param array{
     *     exportID?: string|null,
     *     arn?: string|null,
     *     s3Bucket?: string|null,
     *     s3Key?: string|null,
     *     s3BucketOwner?: string|null,
     *     creationDateTime?: string|null,
     *     endDateTime?: string|null,
     *     status?: 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED'|null,
     *     progressPercentage?: float|null,
     *     summary?: ExportTaskSummary|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
