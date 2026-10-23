<?php

namespace Sunaoka\Aws\Structures\Continuum;

class ContinuumClient extends \Aws\Continuum\ContinuumClient
{
    use AssociateCollector\AssociateCollectorTrait;
    use CreateCodeFinding\CreateCodeFindingTrait;
    use CreateCodeScan\CreateCodeScanTrait;
    use CreateCollector\CreateCollectorTrait;
    use CreateEnvironment\CreateEnvironmentTrait;
    use CreateIntegration\CreateIntegrationTrait;
    use DeleteCollector\DeleteCollectorTrait;
    use DeleteEnvironment\DeleteEnvironmentTrait;
    use DeleteIntegration\DeleteIntegrationTrait;
    use DisassociateCollector\DisassociateCollectorTrait;
    use GetCodeFinding\GetCodeFindingTrait;
    use GetCodeIssue\GetCodeIssueTrait;
    use GetCodeIssueArtifact\GetCodeIssueArtifactTrait;
    use GetCodeScan\GetCodeScanTrait;
    use GetCollector\GetCollectorTrait;
    use GetCollectorDataAccessAuthorization\GetCollectorDataAccessAuthorizationTrait;
    use GetEnvironment\GetEnvironmentTrait;
    use GetIntegration\GetIntegrationTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ListAssociatedCollectors\ListAssociatedCollectorsTrait;
    use ListAssociatedEnvironments\ListAssociatedEnvironmentsTrait;
    use ListCodeFindings\ListCodeFindingsTrait;
    use ListCodeIssueArtifacts\ListCodeIssueArtifactsTrait;
    use ListCodeIssues\ListCodeIssuesTrait;
    use ListCodeScans\ListCodeScansTrait;
    use ListCollectors\ListCollectorsTrait;
    use ListEnvironments\ListEnvironmentsTrait;
    use ListIntegrations\ListIntegrationsTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use StartIntegrationAuthorization\StartIntegrationAuthorizationTrait;
    use UpdateCollector\UpdateCollectorTrait;
    use UpdateEnvironment\UpdateEnvironmentTrait;
    use UpdateIntegration\UpdateIntegrationTrait;
}
