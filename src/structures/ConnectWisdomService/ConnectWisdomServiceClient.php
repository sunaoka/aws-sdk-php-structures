<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService;

class ConnectWisdomServiceClient extends \Aws\ConnectWisdomService\ConnectWisdomServiceClient
{
    use CreateAssistant\CreateAssistantTrait;
    use CreateAssistantAssociation\CreateAssistantAssociationTrait;
    use CreateContent\CreateContentTrait;
    use CreateKnowledgeBase\CreateKnowledgeBaseTrait;
    use CreateQuickResponse\CreateQuickResponseTrait;
    use CreateSession\CreateSessionTrait;
    use DeleteAssistant\DeleteAssistantTrait;
    use DeleteAssistantAssociation\DeleteAssistantAssociationTrait;
    use DeleteContent\DeleteContentTrait;
    use DeleteImportJob\DeleteImportJobTrait;
    use DeleteKnowledgeBase\DeleteKnowledgeBaseTrait;
    use DeleteQuickResponse\DeleteQuickResponseTrait;
    use GetAssistant\GetAssistantTrait;
    use GetAssistantAssociation\GetAssistantAssociationTrait;
    use GetContent\GetContentTrait;
    use GetContentSummary\GetContentSummaryTrait;
    use GetImportJob\GetImportJobTrait;
    use GetKnowledgeBase\GetKnowledgeBaseTrait;
    use GetQuickResponse\GetQuickResponseTrait;
    use GetRecommendations\GetRecommendationsTrait;
    use GetSession\GetSessionTrait;
    use ListAssistantAssociations\ListAssistantAssociationsTrait;
    use ListAssistants\ListAssistantsTrait;
    use ListContents\ListContentsTrait;
    use ListImportJobs\ListImportJobsTrait;
    use ListKnowledgeBases\ListKnowledgeBasesTrait;
    use ListQuickResponses\ListQuickResponsesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use NotifyRecommendationsReceived\NotifyRecommendationsReceivedTrait;
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
}
