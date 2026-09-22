<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $nodeId
 * @property 'SERVICE'|'RESOURCE'|'REMOTE_SERVICE'|null $nodeType
 * @property string|null $name
 * @property list<KeyFilter>|null $tags
 * @property list<KeyFilter>|null $telemetryAttributes
 * @property list<string>|null $region
 * @property list<string>|null $cloudProvider
 * @property list<string>|null $sourceAccountId
 * @property list<string>|null $namespace
 * @property list<'GEN_AI_AGENT'|'GEN_AI_MODEL'|'DATABASE'|'MESSAGING_QUEUE'|'COMPUTE'|'STORAGE'|'NETWORK'>|null $category
 * @property list<string>|null $stage
 * @property list<'VPC_FLOW_LOG'|'CLOUDTRAIL'|'IAM_POLICY'|'CODE_SEMANTICS'|'TELEMETRY'|'AZURE_VNET_FLOW_LOG'|'ELB_ACCESS_LOG'|'CLOUDFRONT_ACCESS_LOG'|'S3_ACCESS_LOG'|'WAF_ACCESS_LOG'|'AWS_INTEGRATION'|'CONFIG'>|null $sources
 */
class NodeFilters extends Shape
{
    /**
     * @param array{
     *     nodeId?: string|null,
     *     nodeType?: 'SERVICE'|'RESOURCE'|'REMOTE_SERVICE'|null,
     *     name?: string|null,
     *     tags?: list<KeyFilter>|null,
     *     telemetryAttributes?: list<KeyFilter>|null,
     *     region?: list<string>|null,
     *     cloudProvider?: list<string>|null,
     *     sourceAccountId?: list<string>|null,
     *     namespace?: list<string>|null,
     *     category?: list<'GEN_AI_AGENT'|'GEN_AI_MODEL'|'DATABASE'|'MESSAGING_QUEUE'|'COMPUTE'|'STORAGE'|'NETWORK'>|null,
     *     stage?: list<string>|null,
     *     sources?: list<'VPC_FLOW_LOG'|'CLOUDTRAIL'|'IAM_POLICY'|'CODE_SEMANTICS'|'TELEMETRY'|'AZURE_VNET_FLOW_LOG'|'ELB_ACCESS_LOG'|'CLOUDFRONT_ACCESS_LOG'|'S3_ACCESS_LOG'|'WAF_ACCESS_LOG'|'AWS_INTEGRATION'|'CONFIG'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
