<?php

namespace Sunaoka\Aws\Structures\Artifact\ListReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property 'PUBLISHED'|'UNPUBLISHED'|null $state
 * @property string|null $arn
 * @property int<1, max>|null $version
 * @property 'PROCESSING'|'COMPLETE'|'FAILED'|'FAULT'|null $uploadState
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $periodStart
 * @property \Aws\Api\DateTimeResult|null $periodEnd
 * @property string|null $series
 * @property string|null $category
 * @property string|null $companyName
 * @property string|null $productName
 * @property string|null $statusMessage
 * @property 'PASSTHROUGH'|'EXPLICIT'|null $acceptanceType
 */
class ReportSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     state?: 'PUBLISHED'|'UNPUBLISHED'|null,
     *     arn?: string|null,
     *     version?: int<1, max>|null,
     *     uploadState?: 'PROCESSING'|'COMPLETE'|'FAILED'|'FAULT'|null,
     *     description?: string|null,
     *     periodStart?: \Aws\Api\DateTimeResult|null,
     *     periodEnd?: \Aws\Api\DateTimeResult|null,
     *     series?: string|null,
     *     category?: string|null,
     *     companyName?: string|null,
     *     productName?: string|null,
     *     statusMessage?: string|null,
     *     acceptanceType?: 'PASSTHROUGH'|'EXPLICIT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
