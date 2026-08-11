<?php

namespace Sunaoka\Aws\Structures\Connect\ListMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property 'PUBLISHED'|'SAVED' $Status
 * @property 'AWS_MANAGED'|'CUSTOMER_MANAGED' $Type
 * @property string|null $LastModifiedRegion
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class MetricSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Id: string,
     *     Name: string,
     *     Status: 'PUBLISHED'|'SAVED',
     *     Type: 'AWS_MANAGED'|'CUSTOMER_MANAGED',
     *     LastModifiedRegion?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
