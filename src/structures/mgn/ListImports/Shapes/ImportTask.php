<?php

namespace Sunaoka\Aws\Structures\mgn\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $creationDateTime
 * @property string|null $endDateTime
 * @property string|null $importID
 * @property float|null $progressPercentage
 * @property S3BucketSource|null $s3BucketSource
 * @property 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED'|null $status
 * @property ImportTaskSummary|null $summary
 */
class ImportTask extends Shape
{
    /**
     * @param array{
     *     creationDateTime?: string|null,
     *     endDateTime?: string|null,
     *     importID?: string|null,
     *     progressPercentage?: float|null,
     *     s3BucketSource?: S3BucketSource|null,
     *     status?: 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED'|null,
     *     summary?: ImportTaskSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
