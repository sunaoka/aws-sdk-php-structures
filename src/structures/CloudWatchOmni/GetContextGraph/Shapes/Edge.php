<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $edgeId
 * @property string|null $from
 * @property string|null $to
 * @property 'CALLS'|'ACCESSES'|'RUNS_ON'|null $edgeType
 * @property list<string>|null $operations
 * @property EdgeProperties|null $edgeProperties
 * @property array<string, string>|null $telemetryAttributes
 * @property list<'LOGS'|'METRICS'|'TRACES'|'CONFIG'|'UNKNOWN'>|null $signalTypes
 * @property list<'VPC_FLOW_LOG'|'CLOUDTRAIL'|'IAM_POLICY'|'CODE_SEMANTICS'|'TELEMETRY'|'AZURE_VNET_FLOW_LOG'|'ELB_ACCESS_LOG'|'CLOUDFRONT_ACCESS_LOG'|'S3_ACCESS_LOG'|'WAF_ACCESS_LOG'|'AWS_INTEGRATION'|'CONFIG'>|null $sources
 * @property Metadata|null $metadata
 * @property \Aws\Api\DateTimeResult|null $firstObservedAt
 * @property \Aws\Api\DateTimeResult|null $lastObservedAt
 */
class Edge extends Shape
{
    /**
     * @param array{
     *     edgeId?: string|null,
     *     from?: string|null,
     *     to?: string|null,
     *     edgeType?: 'CALLS'|'ACCESSES'|'RUNS_ON'|null,
     *     operations?: list<string>|null,
     *     edgeProperties?: EdgeProperties|null,
     *     telemetryAttributes?: array<string, string>|null,
     *     signalTypes?: list<'LOGS'|'METRICS'|'TRACES'|'CONFIG'|'UNKNOWN'>|null,
     *     sources?: list<'VPC_FLOW_LOG'|'CLOUDTRAIL'|'IAM_POLICY'|'CODE_SEMANTICS'|'TELEMETRY'|'AZURE_VNET_FLOW_LOG'|'ELB_ACCESS_LOG'|'CLOUDFRONT_ACCESS_LOG'|'S3_ACCESS_LOG'|'WAF_ACCESS_LOG'|'AWS_INTEGRATION'|'CONFIG'>|null,
     *     metadata?: Metadata|null,
     *     firstObservedAt?: \Aws\Api\DateTimeResult|null,
     *     lastObservedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
