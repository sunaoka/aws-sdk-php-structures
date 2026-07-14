<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FindingsSummary.TotalFindings'|'FindingsSummary.Severities.Other'|'FindingsSummary.Severities.Fatal'|'FindingsSummary.Severities.Critical'|'FindingsSummary.Severities.High'|'FindingsSummary.Severities.Medium'|'FindingsSummary.Severities.Low'|'FindingsSummary.Severities.Informational'|'FindingsSummary.Severities.Unknown'|'ResourceInfo.AIDetails.SelfHostedAIModelResourceCount'|'ResourceInfo.AIDetails.SelfHostedAIAgentResourceCount'|'ResourceInfo.AIDetails.SelfHostedAIModelServingResourceCount'|'ResourceInfo.AIDetails.SelfHostedAIExternalEndpointResourceCount'|'ResourceInfo.AIDetails.SelfHostedAIDevelopmentResourceCount'|'ResourceInfo.AIDetails.SelfHostedAIAgentFrameworkResourceCount'|'ResourceInfo.AIDetails.SelfHostedAIAgentToolsAndIdentityResourceCount'|'ResourceInfo.AIDetails.SelfHostedTotalAIResourceCount'|null $FieldName
 * @property NumberFilter|null $Filter
 */
class ResourcesNumberFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'FindingsSummary.TotalFindings'|'FindingsSummary.Severities.Other'|'FindingsSummary.Severities.Fatal'|'FindingsSummary.Severities.Critical'|'FindingsSummary.Severities.High'|'FindingsSummary.Severities.Medium'|'FindingsSummary.Severities.Low'|'FindingsSummary.Severities.Informational'|'FindingsSummary.Severities.Unknown'|'ResourceInfo.AIDetails.SelfHostedAIModelResourceCount'|'ResourceInfo.AIDetails.SelfHostedAIAgentResourceCount'|'ResourceInfo.AIDetails.SelfHostedAIModelServingResourceCount'|'ResourceInfo.AIDetails.SelfHostedAIExternalEndpointResourceCount'|'ResourceInfo.AIDetails.SelfHostedAIDevelopmentResourceCount'|'ResourceInfo.AIDetails.SelfHostedAIAgentFrameworkResourceCount'|'ResourceInfo.AIDetails.SelfHostedAIAgentToolsAndIdentityResourceCount'|'ResourceInfo.AIDetails.SelfHostedTotalAIResourceCount'|null,
     *     Filter?: NumberFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
