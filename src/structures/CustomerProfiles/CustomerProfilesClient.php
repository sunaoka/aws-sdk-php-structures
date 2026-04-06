<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles;

class CustomerProfilesClient extends \Aws\CustomerProfiles\CustomerProfilesClient
{
    use AddProfileKey\AddProfileKeyTrait;
    use CreateCalculatedAttributeDefinition\CreateCalculatedAttributeDefinitionTrait;
    use CreateDomain\CreateDomainTrait;
    use CreateEventStream\CreateEventStreamTrait;
    use CreateIntegrationWorkflow\CreateIntegrationWorkflowTrait;
    use CreateProfile\CreateProfileTrait;
    use DeleteCalculatedAttributeDefinition\DeleteCalculatedAttributeDefinitionTrait;
    use DeleteDomain\DeleteDomainTrait;
    use DeleteEventStream\DeleteEventStreamTrait;
    use DeleteIntegration\DeleteIntegrationTrait;
    use DeleteProfile\DeleteProfileTrait;
    use DeleteProfileKey\DeleteProfileKeyTrait;
    use DeleteProfileObject\DeleteProfileObjectTrait;
    use DeleteProfileObjectType\DeleteProfileObjectTypeTrait;
    use DeleteWorkflow\DeleteWorkflowTrait;
    use GetAutoMergingPreview\GetAutoMergingPreviewTrait;
    use GetCalculatedAttributeDefinition\GetCalculatedAttributeDefinitionTrait;
    use GetCalculatedAttributeForProfile\GetCalculatedAttributeForProfileTrait;
    use GetDomain\GetDomainTrait;
    use GetEventStream\GetEventStreamTrait;
    use GetIdentityResolutionJob\GetIdentityResolutionJobTrait;
    use GetIntegration\GetIntegrationTrait;
    use GetMatches\GetMatchesTrait;
    use GetProfileObjectType\GetProfileObjectTypeTrait;
    use GetProfileObjectTypeTemplate\GetProfileObjectTypeTemplateTrait;
    use GetSimilarProfiles\GetSimilarProfilesTrait;
    use GetWorkflow\GetWorkflowTrait;
    use GetWorkflowSteps\GetWorkflowStepsTrait;
    use ListAccountIntegrations\ListAccountIntegrationsTrait;
    use ListCalculatedAttributeDefinitions\ListCalculatedAttributeDefinitionsTrait;
    use ListCalculatedAttributesForProfile\ListCalculatedAttributesForProfileTrait;
    use ListDomains\ListDomainsTrait;
    use ListEventStreams\ListEventStreamsTrait;
    use ListIdentityResolutionJobs\ListIdentityResolutionJobsTrait;
    use ListIntegrations\ListIntegrationsTrait;
    use ListProfileObjectTypeTemplates\ListProfileObjectTypeTemplatesTrait;
    use ListProfileObjectTypes\ListProfileObjectTypesTrait;
    use ListProfileObjects\ListProfileObjectsTrait;
    use ListRuleBasedMatches\ListRuleBasedMatchesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorkflows\ListWorkflowsTrait;
    use MergeProfiles\MergeProfilesTrait;
    use PutIntegration\PutIntegrationTrait;
    use PutProfileObject\PutProfileObjectTrait;
    use PutProfileObjectType\PutProfileObjectTypeTrait;
    use SearchProfiles\SearchProfilesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCalculatedAttributeDefinition\UpdateCalculatedAttributeDefinitionTrait;
    use UpdateDomain\UpdateDomainTrait;
    use UpdateProfile\UpdateProfileTrait;
}
