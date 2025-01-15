<?php

namespace Sunaoka\Aws\Structures\SesV2\BatchGetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'VDM' $Namespace
 * @property 'SEND'|'COMPLAINT'|'PERMANENT_BOUNCE'|'TRANSIENT_BOUNCE'|'OPEN'|'CLICK'|'DELIVERY'|'DELIVERY_OPEN'|'DELIVERY_CLICK'|'DELIVERY_COMPLAINT' $Metric
 * @property array<'EMAIL_IDENTITY'|'CONFIGURATION_SET'|'ISP', string>|null $Dimensions
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 */
class BatchGetMetricDataQuery extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Namespace: 'VDM',
     *     Metric: 'SEND'|'COMPLAINT'|'PERMANENT_BOUNCE'|'TRANSIENT_BOUNCE'|'OPEN'|'CLICK'|'DELIVERY'|'DELIVERY_OPEN'|'DELIVERY_CLICK'|'DELIVERY_COMPLAINT',
     *     Dimensions?: array<'EMAIL_IDENTITY'|'CONFIGURATION_SET'|'ISP', string>|null,
     *     StartDate: \Aws\Api\DateTimeResult,
     *     EndDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
