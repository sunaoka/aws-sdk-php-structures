<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $edgeId
 * @property string|null $from
 * @property string|null $to
 * @property 'CALLS'|'ACCESSES'|'RUNS_ON'|null $edgeType
 * @property list<string>|null $operations
 * @property list<KeyFilter>|null $telemetryAttributes
 * @property list<'VPC_FLOW_LOG'|'CLOUDTRAIL'|'IAM_POLICY'|'CODE_SEMANTICS'|'TELEMETRY'|'AZURE_VNET_FLOW_LOG'|'ELB_ACCESS_LOG'|'CLOUDFRONT_ACCESS_LOG'|'S3_ACCESS_LOG'|'WAF_ACCESS_LOG'|'AWS_INTEGRATION'|'CONFIG'>|null $sources
 */
class EdgeFilters extends Shape
{
    /**
     * @param array{
     *     edgeId?: string|null,
     *     from?: string|null,
     *     to?: string|null,
     *     edgeType?: 'CALLS'|'ACCESSES'|'RUNS_ON'|null,
     *     operations?: list<string>|null,
     *     telemetryAttributes?: list<KeyFilter>|null,
     *     sources?: list<'VPC_FLOW_LOG'|'CLOUDTRAIL'|'IAM_POLICY'|'CODE_SEMANTICS'|'TELEMETRY'|'AZURE_VNET_FLOW_LOG'|'ELB_ACCESS_LOG'|'CLOUDFRONT_ACCESS_LOG'|'S3_ACCESS_LOG'|'WAF_ACCESS_LOG'|'AWS_INTEGRATION'|'CONFIG'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
