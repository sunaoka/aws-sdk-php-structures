<?php

namespace Sunaoka\Aws\Structures\QConnect;

class QConnectClient extends \Aws\QConnect\QConnectClient
{
    use CreateAssistant\CreateAssistantTrait;
    use CreateAssistantAssociation\CreateAssistantAssociationTrait;
    use CreateContent\CreateContentTrait;
    use CreateContentAssociation\CreateContentAssociationTrait;
    use CreateKnowledgeBase\CreateKnowledgeBaseTrait;
    use CreateQuickResponse\CreateQuickResponseTrait;
    use CreateSession\CreateSessionTrait;
    use DeleteAssistant\DeleteAssistantTrait;
    use DeleteAssistantAssociation\DeleteAssistantAssociationTrait;
    use DeleteContent\DeleteContentTrait;
    use DeleteContentAssociation\DeleteContentAssociationTrait;
    use DeleteImportJob\DeleteImportJobTrait;
    use DeleteKnowledgeBase\DeleteKnowledgeBaseTrait;
    use DeleteQuickResponse\DeleteQuickResponseTrait;
    use GetAssistant\GetAssistantTrait;
    use GetAssistantAssociation\GetAssistantAssociationTrait;
    use GetContent\GetContentTrait;
    use GetContentAssociation\GetContentAssociationTrait;
    use GetContentSummary\GetContentSummaryTrait;
    use GetImportJob\GetImportJobTrait;
    use GetKnowledgeBase\GetKnowledgeBaseTrait;
    use GetQuickResponse\GetQuickResponseTrait;
    use GetRecommendations\GetRecommendationsTrait;
    use GetSession\GetSessionTrait;
    use ListAssistantAssociations\ListAssistantAssociationsTrait;
    use ListAssistants\ListAssistantsTrait;
    use ListContentAssociations\ListContentAssociationsTrait;
    use ListContents\ListContentsTrait;
    use ListImportJobs\ListImportJobsTrait;
    use ListKnowledgeBases\ListKnowledgeBasesTrait;
    use ListQuickResponses\ListQuickResponsesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use NotifyRecommendationsReceived\NotifyRecommendationsReceivedTrait;
    use PutFeedback\PutFeedbackTrait;
    use QueryAssistant\QueryAssistantTrait;
    use RemoveKnowledgeBaseTemplateUri\RemoveKnowledgeBaseTemplateUriTrait;
    use SearchContent\SearchContentTrait;
    use SearchQuickResponses\SearchQuickResponsesTrait;
    use SearchSessions\SearchSessionsTrait;
    use StartContentUpload\StartContentUploadTrait;
    use StartImportJob\StartImportJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateContent\UpdateContentTrait;
    use UpdateKnowledgeBaseTemplateUri\UpdateKnowledgeBaseTemplateUriTrait;
    use UpdateQuickResponse\UpdateQuickResponseTrait;
    use UpdateSession\UpdateSessionTrait;
}
