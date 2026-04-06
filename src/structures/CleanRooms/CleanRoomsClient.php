<?php

namespace Sunaoka\Aws\Structures\CleanRooms;

class CleanRoomsClient extends \Aws\CleanRooms\CleanRoomsClient
{
    use BatchGetCollaborationAnalysisTemplate\BatchGetCollaborationAnalysisTemplateTrait;
    use BatchGetSchema\BatchGetSchemaTrait;
    use CreateAnalysisTemplate\CreateAnalysisTemplateTrait;
    use CreateCollaboration\CreateCollaborationTrait;
    use CreateConfiguredTable\CreateConfiguredTableTrait;
    use CreateConfiguredTableAnalysisRule\CreateConfiguredTableAnalysisRuleTrait;
    use CreateConfiguredTableAssociation\CreateConfiguredTableAssociationTrait;
    use CreateMembership\CreateMembershipTrait;
    use DeleteAnalysisTemplate\DeleteAnalysisTemplateTrait;
    use DeleteCollaboration\DeleteCollaborationTrait;
    use DeleteConfiguredTable\DeleteConfiguredTableTrait;
    use DeleteConfiguredTableAnalysisRule\DeleteConfiguredTableAnalysisRuleTrait;
    use DeleteConfiguredTableAssociation\DeleteConfiguredTableAssociationTrait;
    use DeleteMember\DeleteMemberTrait;
    use DeleteMembership\DeleteMembershipTrait;
    use GetAnalysisTemplate\GetAnalysisTemplateTrait;
    use GetCollaboration\GetCollaborationTrait;
    use GetCollaborationAnalysisTemplate\GetCollaborationAnalysisTemplateTrait;
    use GetConfiguredTable\GetConfiguredTableTrait;
    use GetConfiguredTableAnalysisRule\GetConfiguredTableAnalysisRuleTrait;
    use GetConfiguredTableAssociation\GetConfiguredTableAssociationTrait;
    use GetMembership\GetMembershipTrait;
    use GetProtectedQuery\GetProtectedQueryTrait;
    use GetSchema\GetSchemaTrait;
    use GetSchemaAnalysisRule\GetSchemaAnalysisRuleTrait;
    use ListAnalysisTemplates\ListAnalysisTemplatesTrait;
    use ListCollaborationAnalysisTemplates\ListCollaborationAnalysisTemplatesTrait;
    use ListCollaborations\ListCollaborationsTrait;
    use ListConfiguredTableAssociations\ListConfiguredTableAssociationsTrait;
    use ListConfiguredTables\ListConfiguredTablesTrait;
    use ListMembers\ListMembersTrait;
    use ListMemberships\ListMembershipsTrait;
    use ListProtectedQueries\ListProtectedQueriesTrait;
    use ListSchemas\ListSchemasTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartProtectedQuery\StartProtectedQueryTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAnalysisTemplate\UpdateAnalysisTemplateTrait;
    use UpdateCollaboration\UpdateCollaborationTrait;
    use UpdateConfiguredTable\UpdateConfiguredTableTrait;
    use UpdateConfiguredTableAnalysisRule\UpdateConfiguredTableAnalysisRuleTrait;
    use UpdateConfiguredTableAssociation\UpdateConfiguredTableAssociationTrait;
    use UpdateMembership\UpdateMembershipTrait;
    use UpdateProtectedQuery\UpdateProtectedQueryTrait;
}
