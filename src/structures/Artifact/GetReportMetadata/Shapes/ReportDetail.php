<?php

namespace Sunaoka\Aws\Structures\Artifact\GetReportMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $periodStart
 * @property \Aws\Api\DateTimeResult|null $periodEnd
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 * @property \Aws\Api\DateTimeResult|null $deletedAt
 * @property 'PUBLISHED'|'UNPUBLISHED'|null $state
 * @property string|null $arn
 * @property string|null $series
 * @property string|null $category
 * @property string|null $companyName
 * @property string|null $productName
 * @property string|null $termArn
 * @property int<1, max>|null $version
 * @property 'PASSTHROUGH'|'EXPLICIT'|null $acceptanceType
 * @property int<1, max>|null $sequenceNumber
 * @property 'PROCESSING'|'COMPLETE'|'FAILED'|'FAULT'|null $uploadState
 * @property string|null $statusMessage
 */
class ReportDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     periodStart?: \Aws\Api\DateTimeResult|null,
     *     periodEnd?: \Aws\Api\DateTimeResult|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     deletedAt?: \Aws\Api\DateTimeResult|null,
     *     state?: 'PUBLISHED'|'UNPUBLISHED'|null,
     *     arn?: string|null,
     *     series?: string|null,
     *     category?: string|null,
     *     companyName?: string|null,
     *     productName?: string|null,
     *     termArn?: string|null,
     *     version?: int<1, max>|null,
     *     acceptanceType?: 'PASSTHROUGH'|'EXPLICIT'|null,
     *     sequenceNumber?: int<1, max>|null,
     *     uploadState?: 'PROCESSING'|'COMPLETE'|'FAILED'|'FAULT'|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
