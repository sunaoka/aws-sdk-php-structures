<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeMetric\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property string|null $Description
 * @property MetricCalculation|null $MetricCalculation
 * @property 'SERVICE_LEVEL_BUILDER'|'METRIC_BUILDER'|null $CreationMethod
 * @property 'PUBLISHED'|'SAVED'|null $Status
 * @property 'AWS_MANAGED'|'CUSTOMER_MANAGED' $Type
 * @property 'INTEGER'|'DOUBLE'|'PERCENT'|'SECONDS' $Unit
 * @property 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|null $PositiveTrendIndicator
 * @property list<string> $Groupings
 * @property list<AvailableFilter> $Filters
 * @property \Aws\Api\DateTimeResult|null $EffectiveTime
 * @property int|null $RefreshRate
 * @property string $Category
 * @property list<string>|null $SupportedStats
 * @property string|null $DefaultStat
 * @property bool $SupportsPreaggregateCalculation
 * @property bool $SupportsCustomCalculation
 * @property string|null $PrimaryEventSource
 * @property string|null $PrimaryEventSourceEffectiveTimestampType
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property CreatedByInfo|null $CreatedUser
 * @property string|null $LastModifiedRegion
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property CreatedByInfo|null $LastModifiedUser
 * @property array<string, string>|null $Tags
 */
class MetricDefinition extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Id: string,
     *     Name: string,
     *     Description?: string|null,
     *     MetricCalculation?: MetricCalculation|null,
     *     CreationMethod?: 'SERVICE_LEVEL_BUILDER'|'METRIC_BUILDER'|null,
     *     Status?: 'PUBLISHED'|'SAVED'|null,
     *     Type: 'AWS_MANAGED'|'CUSTOMER_MANAGED',
     *     Unit: 'INTEGER'|'DOUBLE'|'PERCENT'|'SECONDS',
     *     PositiveTrendIndicator?: 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|null,
     *     Groupings: list<string>,
     *     Filters: list<AvailableFilter>,
     *     EffectiveTime?: \Aws\Api\DateTimeResult|null,
     *     RefreshRate?: int|null,
     *     Category: string,
     *     SupportedStats?: list<string>|null,
     *     DefaultStat?: string|null,
     *     SupportsPreaggregateCalculation: bool,
     *     SupportsCustomCalculation: bool,
     *     PrimaryEventSource?: string|null,
     *     PrimaryEventSourceEffectiveTimestampType?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedUser?: CreatedByInfo|null,
     *     LastModifiedRegion?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedUser?: CreatedByInfo|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
