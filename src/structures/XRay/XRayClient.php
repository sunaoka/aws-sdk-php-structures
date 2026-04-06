<?php

namespace Sunaoka\Aws\Structures\XRay;

class XRayClient extends \Aws\XRay\XRayClient
{
    use BatchGetTraces\BatchGetTracesTrait;
    use CreateGroup\CreateGroupTrait;
    use CreateSamplingRule\CreateSamplingRuleTrait;
    use DeleteGroup\DeleteGroupTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteSamplingRule\DeleteSamplingRuleTrait;
    use GetEncryptionConfig\GetEncryptionConfigTrait;
    use GetGroup\GetGroupTrait;
    use GetGroups\GetGroupsTrait;
    use GetInsight\GetInsightTrait;
    use GetInsightEvents\GetInsightEventsTrait;
    use GetInsightImpactGraph\GetInsightImpactGraphTrait;
    use GetInsightSummaries\GetInsightSummariesTrait;
    use GetSamplingRules\GetSamplingRulesTrait;
    use GetSamplingStatisticSummaries\GetSamplingStatisticSummariesTrait;
    use GetSamplingTargets\GetSamplingTargetsTrait;
    use GetServiceGraph\GetServiceGraphTrait;
    use GetTimeSeriesServiceStatistics\GetTimeSeriesServiceStatisticsTrait;
    use GetTraceGraph\GetTraceGraphTrait;
    use GetTraceSummaries\GetTraceSummariesTrait;
    use ListResourcePolicies\ListResourcePoliciesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutEncryptionConfig\PutEncryptionConfigTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use PutTelemetryRecords\PutTelemetryRecordsTrait;
    use PutTraceSegments\PutTraceSegmentsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateGroup\UpdateGroupTrait;
    use UpdateSamplingRule\UpdateSamplingRuleTrait;
}
