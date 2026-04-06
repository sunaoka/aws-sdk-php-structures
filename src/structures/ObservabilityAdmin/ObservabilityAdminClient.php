<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin;

class ObservabilityAdminClient extends \Aws\ObservabilityAdmin\ObservabilityAdminClient
{
    use CreateCentralizationRuleForOrganization\CreateCentralizationRuleForOrganizationTrait;
    use CreateS3TableIntegration\CreateS3TableIntegrationTrait;
    use CreateTelemetryPipeline\CreateTelemetryPipelineTrait;
    use CreateTelemetryRule\CreateTelemetryRuleTrait;
    use CreateTelemetryRuleForOrganization\CreateTelemetryRuleForOrganizationTrait;
    use DeleteCentralizationRuleForOrganization\DeleteCentralizationRuleForOrganizationTrait;
    use DeleteS3TableIntegration\DeleteS3TableIntegrationTrait;
    use DeleteTelemetryPipeline\DeleteTelemetryPipelineTrait;
    use DeleteTelemetryRule\DeleteTelemetryRuleTrait;
    use DeleteTelemetryRuleForOrganization\DeleteTelemetryRuleForOrganizationTrait;
    use GetCentralizationRuleForOrganization\GetCentralizationRuleForOrganizationTrait;
    use GetS3TableIntegration\GetS3TableIntegrationTrait;
    use GetTelemetryEnrichmentStatus\GetTelemetryEnrichmentStatusTrait;
    use GetTelemetryEvaluationStatus\GetTelemetryEvaluationStatusTrait;
    use GetTelemetryEvaluationStatusForOrganization\GetTelemetryEvaluationStatusForOrganizationTrait;
    use GetTelemetryPipeline\GetTelemetryPipelineTrait;
    use GetTelemetryRule\GetTelemetryRuleTrait;
    use GetTelemetryRuleForOrganization\GetTelemetryRuleForOrganizationTrait;
    use ListCentralizationRulesForOrganization\ListCentralizationRulesForOrganizationTrait;
    use ListResourceTelemetry\ListResourceTelemetryTrait;
    use ListResourceTelemetryForOrganization\ListResourceTelemetryForOrganizationTrait;
    use ListS3TableIntegrations\ListS3TableIntegrationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTelemetryPipelines\ListTelemetryPipelinesTrait;
    use ListTelemetryRules\ListTelemetryRulesTrait;
    use ListTelemetryRulesForOrganization\ListTelemetryRulesForOrganizationTrait;
    use StartTelemetryEnrichment\StartTelemetryEnrichmentTrait;
    use StartTelemetryEvaluation\StartTelemetryEvaluationTrait;
    use StartTelemetryEvaluationForOrganization\StartTelemetryEvaluationForOrganizationTrait;
    use StopTelemetryEnrichment\StopTelemetryEnrichmentTrait;
    use StopTelemetryEvaluation\StopTelemetryEvaluationTrait;
    use StopTelemetryEvaluationForOrganization\StopTelemetryEvaluationForOrganizationTrait;
    use TagResource\TagResourceTrait;
    use TestTelemetryPipeline\TestTelemetryPipelineTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCentralizationRuleForOrganization\UpdateCentralizationRuleForOrganizationTrait;
    use UpdateTelemetryPipeline\UpdateTelemetryPipelineTrait;
    use UpdateTelemetryRule\UpdateTelemetryRuleTrait;
    use UpdateTelemetryRuleForOrganization\UpdateTelemetryRuleForOrganizationTrait;
    use ValidateTelemetryPipelineConfiguration\ValidateTelemetryPipelineConfigurationTrait;
}
