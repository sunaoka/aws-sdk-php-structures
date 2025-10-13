<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin;

class ObservabilityAdminClient extends \Aws\ObservabilityAdmin\ObservabilityAdminClient
{
    use CreateCentralizationRuleForOrganization\CreateCentralizationRuleForOrganizationTrait;
    use CreateTelemetryRule\CreateTelemetryRuleTrait;
    use CreateTelemetryRuleForOrganization\CreateTelemetryRuleForOrganizationTrait;
    use DeleteCentralizationRuleForOrganization\DeleteCentralizationRuleForOrganizationTrait;
    use DeleteTelemetryRule\DeleteTelemetryRuleTrait;
    use DeleteTelemetryRuleForOrganization\DeleteTelemetryRuleForOrganizationTrait;
    use GetCentralizationRuleForOrganization\GetCentralizationRuleForOrganizationTrait;
    use GetTelemetryEnrichmentStatus\GetTelemetryEnrichmentStatusTrait;
    use GetTelemetryEvaluationStatus\GetTelemetryEvaluationStatusTrait;
    use GetTelemetryEvaluationStatusForOrganization\GetTelemetryEvaluationStatusForOrganizationTrait;
    use GetTelemetryRule\GetTelemetryRuleTrait;
    use GetTelemetryRuleForOrganization\GetTelemetryRuleForOrganizationTrait;
    use ListCentralizationRulesForOrganization\ListCentralizationRulesForOrganizationTrait;
    use ListResourceTelemetry\ListResourceTelemetryTrait;
    use ListResourceTelemetryForOrganization\ListResourceTelemetryForOrganizationTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTelemetryRules\ListTelemetryRulesTrait;
    use ListTelemetryRulesForOrganization\ListTelemetryRulesForOrganizationTrait;
    use StartTelemetryEnrichment\StartTelemetryEnrichmentTrait;
    use StartTelemetryEvaluation\StartTelemetryEvaluationTrait;
    use StartTelemetryEvaluationForOrganization\StartTelemetryEvaluationForOrganizationTrait;
    use StopTelemetryEnrichment\StopTelemetryEnrichmentTrait;
    use StopTelemetryEvaluation\StopTelemetryEvaluationTrait;
    use StopTelemetryEvaluationForOrganization\StopTelemetryEvaluationForOrganizationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCentralizationRuleForOrganization\UpdateCentralizationRuleForOrganizationTrait;
    use UpdateTelemetryRule\UpdateTelemetryRuleTrait;
    use UpdateTelemetryRuleForOrganization\UpdateTelemetryRuleForOrganizationTrait;
}
