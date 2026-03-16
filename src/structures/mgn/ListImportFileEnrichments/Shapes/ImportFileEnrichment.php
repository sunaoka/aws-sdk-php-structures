<?php

namespace Sunaoka\Aws\Structures\mgn\ListImportFileEnrichments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobID
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED'|'SUCCEEDED_WITH_WARNINGS'|null $status
 * @property string|null $statusDetails
 * @property Checksum|null $checksum
 * @property EnrichmentTargetS3Configuration|null $s3BucketTarget
 */
class ImportFileEnrichment extends Shape
{
    /**
     * @param array{
     *     jobID?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'PENDING'|'STARTED'|'FAILED'|'SUCCEEDED'|'SUCCEEDED_WITH_WARNINGS'|null,
     *     statusDetails?: string|null,
     *     checksum?: Checksum|null,
     *     s3BucketTarget?: EnrichmentTargetS3Configuration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
