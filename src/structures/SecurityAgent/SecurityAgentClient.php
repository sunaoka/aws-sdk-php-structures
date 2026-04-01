<?php

namespace Sunaoka\Aws\Structures\SecurityAgent;

class SecurityAgentClient extends \Aws\SecurityAgent\SecurityAgentClient
{
    use AddArtifact\AddArtifactTrait;
    use BatchDeletePentests\BatchDeletePentestsTrait;
    use BatchGetAgentSpaces\BatchGetAgentSpacesTrait;
    use BatchGetArtifactMetadata\BatchGetArtifactMetadataTrait;
    use BatchGetFindings\BatchGetFindingsTrait;
    use BatchGetPentestJobTasks\BatchGetPentestJobTasksTrait;
    use BatchGetPentestJobs\BatchGetPentestJobsTrait;
    use BatchGetPentests\BatchGetPentestsTrait;
    use BatchGetTargetDomains\BatchGetTargetDomainsTrait;
    use CreateAgentSpace\CreateAgentSpaceTrait;
    use CreateApplication\CreateApplicationTrait;
    use CreateIntegration\CreateIntegrationTrait;
    use CreateMembership\CreateMembershipTrait;
    use CreatePentest\CreatePentestTrait;
    use CreateTargetDomain\CreateTargetDomainTrait;
    use DeleteAgentSpace\DeleteAgentSpaceTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteArtifact\DeleteArtifactTrait;
    use DeleteIntegration\DeleteIntegrationTrait;
    use DeleteMembership\DeleteMembershipTrait;
    use DeleteTargetDomain\DeleteTargetDomainTrait;
    use GetApplication\GetApplicationTrait;
    use GetArtifact\GetArtifactTrait;
    use GetIntegration\GetIntegrationTrait;
    use InitiateProviderRegistration\InitiateProviderRegistrationTrait;
    use ListAgentSpaces\ListAgentSpacesTrait;
    use ListApplications\ListApplicationsTrait;
    use ListArtifacts\ListArtifactsTrait;
    use ListDiscoveredEndpoints\ListDiscoveredEndpointsTrait;
    use ListFindings\ListFindingsTrait;
    use ListIntegratedResources\ListIntegratedResourcesTrait;
    use ListIntegrations\ListIntegrationsTrait;
    use ListMemberships\ListMembershipsTrait;
    use ListPentestJobTasks\ListPentestJobTasksTrait;
    use ListPentestJobsForPentest\ListPentestJobsForPentestTrait;
    use ListPentests\ListPentestsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTargetDomains\ListTargetDomainsTrait;
    use StartCodeRemediation\StartCodeRemediationTrait;
    use StartPentestJob\StartPentestJobTrait;
    use StopPentestJob\StopPentestJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAgentSpace\UpdateAgentSpaceTrait;
    use UpdateApplication\UpdateApplicationTrait;
    use UpdateFinding\UpdateFindingTrait;
    use UpdateIntegratedResources\UpdateIntegratedResourcesTrait;
    use UpdatePentest\UpdatePentestTrait;
    use UpdateTargetDomain\UpdateTargetDomainTrait;
    use VerifyTargetDomain\VerifyTargetDomainTrait;
}
