<?php

namespace Sunaoka\Aws\Structures\Artifact\GetReportMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $periodStart
 * @property \Aws\Api\DateTimeResult $periodEnd
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property \Aws\Api\DateTimeResult $deletedAt
 * @property 'PUBLISHED'|'UNPUBLISHED' $state
 * @property string $arn
 * @property string $series
 * @property string $category
 * @property string $companyName
 * @property string $productName
 * @property string $termArn
 * @property int<1, max> $version
 * @property 'PASSTHROUGH'|'EXPLICIT' $acceptanceType
 * @property int<1, max> $sequenceNumber
 * @property 'PROCESSING'|'COMPLETE'|'FAILED'|'FAULT' $uploadState
 * @property string $statusMessage
 */
class ReportDetail extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     description?: string,
     *     periodStart?: \Aws\Api\DateTimeResult,
     *     periodEnd?: \Aws\Api\DateTimeResult,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult,
     *     deletedAt?: \Aws\Api\DateTimeResult,
     *     state?: 'PUBLISHED'|'UNPUBLISHED',
     *     arn?: string,
     *     series?: string,
     *     category?: string,
     *     companyName?: string,
     *     productName?: string,
     *     termArn?: string,
     *     version?: int<1, max>,
     *     acceptanceType?: 'PASSTHROUGH'|'EXPLICIT',
     *     sequenceNumber?: int<1, max>,
     *     uploadState?: 'PROCESSING'|'COMPLETE'|'FAILED'|'FAULT',
     *     statusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
