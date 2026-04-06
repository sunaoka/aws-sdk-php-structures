<?php

namespace Sunaoka\Aws\Structures\mgn\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $importID
 * @property string|null $arn
 * @property S3BucketSource|null $s3BucketSource
 * @property string|null $creationDateTime
 * @property string|null $endDateTime
 * @property 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED'|null $status
 * @property float|null $progressPercentage
 * @property ImportTaskSummary|null $summary
 * @property array<string, string>|null $tags
 */
class ImportTask extends Shape
{
    /**
     * @param array{
     *     importID?: string|null,
     *     arn?: string|null,
     *     s3BucketSource?: S3BucketSource|null,
     *     creationDateTime?: string|null,
     *     endDateTime?: string|null,
     *     status?: 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED'|null,
     *     progressPercentage?: float|null,
     *     summary?: ImportTaskSummary|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
