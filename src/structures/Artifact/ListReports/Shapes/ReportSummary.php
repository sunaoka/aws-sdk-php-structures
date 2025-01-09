<?php

namespace Sunaoka\Aws\Structures\Artifact\ListReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property 'PUBLISHED'|'UNPUBLISHED' $state
 * @property string $arn
 * @property int $version
 * @property 'PROCESSING'|'COMPLETE'|'FAILED'|'FAULT' $uploadState
 * @property string $description
 * @property \Aws\Api\DateTimeResult $periodStart
 * @property \Aws\Api\DateTimeResult $periodEnd
 * @property string $series
 * @property string $category
 * @property string $companyName
 * @property string $productName
 * @property string $statusMessage
 * @property 'PASSTHROUGH'|'EXPLICIT' $acceptanceType
 */
class ReportSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     state?: 'PUBLISHED'|'UNPUBLISHED',
     *     arn?: string,
     *     version?: int,
     *     uploadState?: 'PROCESSING'|'COMPLETE'|'FAILED'|'FAULT',
     *     description?: string,
     *     periodStart?: \Aws\Api\DateTimeResult,
     *     periodEnd?: \Aws\Api\DateTimeResult,
     *     series?: string,
     *     category?: string,
     *     companyName?: string,
     *     productName?: string,
     *     statusMessage?: string,
     *     acceptanceType?: 'PASSTHROUGH'|'EXPLICIT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
