<?php

namespace Sunaoka\Aws\Structures\mgn\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $creationDateTime
 * @property string $endDateTime
 * @property string $importID
 * @property float $progressPercentage
 * @property S3BucketSource $s3BucketSource
 * @property 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED' $status
 * @property ImportTaskSummary $summary
 */
class ImportTask extends Shape
{
    /**
     * @param array{
     *     creationDateTime?: string,
     *     endDateTime?: string,
     *     importID?: string,
     *     progressPercentage?: float,
     *     s3BucketSource?: S3BucketSource,
     *     status?: 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED',
     *     summary?: ImportTaskSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
