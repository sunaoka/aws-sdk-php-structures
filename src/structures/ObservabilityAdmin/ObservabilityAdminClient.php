<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin;

class ObservabilityAdminClient extends \Aws\ObservabilityAdmin\ObservabilityAdminClient
{
    use CreateCentralizationRuleForOrganization\CreateCentralizationRuleForOrganizationTrait;
    use CreateConnector\CreateConnectorTrait;
    use CreateDatasetIntegration\CreateDatasetIntegrationTrait;
    use CreateS3TableIntegration\CreateS3TableIntegrationTrait;
    use CreateTelemetryPipeline\CreateTelemetryPipelineTrait;
    use CreateTelemetryRule\CreateTelemetryRuleTrait;
    use CreateTelemetryRuleForOrganization\CreateTelemetryRuleForOrganizationTrait;
    use DeleteCentralizationRuleForOrganization\DeleteCentralizationRuleForOrganizationTrait;
    use DeleteConnector\DeleteConnectorTrait;
    use DeleteDatasetIntegration\DeleteDatasetIntegrationTrait;
    use DeleteS3TableIntegration\DeleteS3TableIntegrationTrait;
    use DeleteTelemetryPipeline\DeleteTelemetryPipelineTrait;
    use DeleteTelemetryRule\DeleteTelemetryRuleTrait;
    use DeleteTelemetryRuleForOrganization\DeleteTelemetryRuleForOrganizationTrait;
    use GetCentralizationRuleForOrganization\GetCentralizationRuleForOrganizationTrait;
    use GetConnector\GetConnectorTrait;
    use GetConnectorTelemetryManifest\GetConnectorTelemetryManifestTrait;
    use GetConnectorTelemetrySetup\GetConnectorTelemetrySetupTrait;
    use GetDatasetIntegration\GetDatasetIntegrationTrait;
    use GetS3TableIntegration\GetS3TableIntegrationTrait;
    use GetTelemetryEnrichmentStatus\GetTelemetryEnrichmentStatusTrait;
    use GetTelemetryEvaluationStatus\GetTelemetryEvaluationStatusTrait;
    use GetTelemetryEvaluationStatusForOrganization\GetTelemetryEvaluationStatusForOrganizationTrait;
    use GetTelemetryPipeline\GetTelemetryPipelineTrait;
    use GetTelemetryRule\GetTelemetryRuleTrait;
    use GetTelemetryRuleForOrganization\GetTelemetryRuleForOrganizationTrait;
    use GetThirdPartyTelemetryEnrichment\GetThirdPartyTelemetryEnrichmentTrait;
    use ListCentralizationRulesForOrganization\ListCentralizationRulesForOrganizationTrait;
    use ListConnectors\ListConnectorsTrait;
    use ListDatasetIntegrations\ListDatasetIntegrationsTrait;
    use ListResourceTelemetry\ListResourceTelemetryTrait;
    use ListResourceTelemetryForOrganization\ListResourceTelemetryForOrganizationTrait;
    use ListResourcesByConnector\ListResourcesByConnectorTrait;
    use ListS3TableIntegrations\ListS3TableIntegrationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTelemetryPipelines\ListTelemetryPipelinesTrait;
    use ListTelemetryRules\ListTelemetryRulesTrait;
    use ListTelemetryRulesForOrganization\ListTelemetryRulesForOrganizationTrait;
    use ListThirdPartyTelemetryEnrichments\ListThirdPartyTelemetryEnrichmentsTrait;
    use PutConnectorTelemetryManifest\PutConnectorTelemetryManifestTrait;
    use StartTelemetryEnrichment\StartTelemetryEnrichmentTrait;
    use StartTelemetryEvaluation\StartTelemetryEvaluationTrait;
    use StartTelemetryEvaluationForOrganization\StartTelemetryEvaluationForOrganizationTrait;
    use StartTelemetryPipelineRefresh\StartTelemetryPipelineRefreshTrait;
    use StartThirdPartyTelemetryEnrichment\StartThirdPartyTelemetryEnrichmentTrait;
    use StopTelemetryEnrichment\StopTelemetryEnrichmentTrait;
    use StopTelemetryEvaluation\StopTelemetryEvaluationTrait;
    use StopTelemetryEvaluationForOrganization\StopTelemetryEvaluationForOrganizationTrait;
    use StopThirdPartyTelemetryEnrichment\StopThirdPartyTelemetryEnrichmentTrait;
    use TagResource\TagResourceTrait;
    use TestTelemetryPipeline\TestTelemetryPipelineTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCentralizationRuleForOrganization\UpdateCentralizationRuleForOrganizationTrait;
    use UpdateDatasetIntegration\UpdateDatasetIntegrationTrait;
    use UpdateTelemetryPipeline\UpdateTelemetryPipelineTrait;
    use UpdateTelemetryRule\UpdateTelemetryRuleTrait;
    use UpdateTelemetryRuleForOrganization\UpdateTelemetryRuleForOrganizationTrait;
    use ValidateTelemetryPipelineConfiguration\ValidateTelemetryPipelineConfigurationTrait;
}
