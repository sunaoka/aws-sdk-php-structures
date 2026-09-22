<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $nodeId
 * @property 'SERVICE'|'RESOURCE'|'REMOTE_SERVICE'|null $nodeType
 * @property string|null $name
 * @property list<string>|null $alternateNames
 * @property array<string, string>|null $tags
 * @property NodeProperties|null $nodeProperties
 * @property array<string, string>|null $telemetryAttributes
 * @property array<string, list<array<string, string>>>|null $operationDetails
 * @property list<'LOGS'|'METRICS'|'TRACES'|'CONFIG'|'UNKNOWN'>|null $signalTypes
 * @property list<'VPC_FLOW_LOG'|'CLOUDTRAIL'|'IAM_POLICY'|'CODE_SEMANTICS'|'TELEMETRY'|'AZURE_VNET_FLOW_LOG'|'ELB_ACCESS_LOG'|'CLOUDFRONT_ACCESS_LOG'|'S3_ACCESS_LOG'|'WAF_ACCESS_LOG'|'AWS_INTEGRATION'|'CONFIG'>|null $sources
 * @property Metadata|null $metadata
 * @property \Aws\Api\DateTimeResult|null $firstObservedAt
 * @property \Aws\Api\DateTimeResult|null $lastObservedAt
 * @property list<Edge>|null $edges
 */
class Node extends Shape
{
    /**
     * @param array{
     *     nodeId?: string|null,
     *     nodeType?: 'SERVICE'|'RESOURCE'|'REMOTE_SERVICE'|null,
     *     name?: string|null,
     *     alternateNames?: list<string>|null,
     *     tags?: array<string, string>|null,
     *     nodeProperties?: NodeProperties|null,
     *     telemetryAttributes?: array<string, string>|null,
     *     operationDetails?: array<string, list<array<string, string>>>|null,
     *     signalTypes?: list<'LOGS'|'METRICS'|'TRACES'|'CONFIG'|'UNKNOWN'>|null,
     *     sources?: list<'VPC_FLOW_LOG'|'CLOUDTRAIL'|'IAM_POLICY'|'CODE_SEMANTICS'|'TELEMETRY'|'AZURE_VNET_FLOW_LOG'|'ELB_ACCESS_LOG'|'CLOUDFRONT_ACCESS_LOG'|'S3_ACCESS_LOG'|'WAF_ACCESS_LOG'|'AWS_INTEGRATION'|'CONFIG'>|null,
     *     metadata?: Metadata|null,
     *     firstObservedAt?: \Aws\Api\DateTimeResult|null,
     *     lastObservedAt?: \Aws\Api\DateTimeResult|null,
     *     edges?: list<Edge>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
