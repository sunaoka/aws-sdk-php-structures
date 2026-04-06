<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService;

class ConnectWisdomServiceClient extends \Aws\ConnectWisdomService\ConnectWisdomServiceClient
{
    use CreateAssistant\CreateAssistantTrait;
    use CreateAssistantAssociation\CreateAssistantAssociationTrait;
    use CreateContent\CreateContentTrait;
    use CreateKnowledgeBase\CreateKnowledgeBaseTrait;
    use CreateSession\CreateSessionTrait;
    use DeleteAssistant\DeleteAssistantTrait;
    use DeleteAssistantAssociation\DeleteAssistantAssociationTrait;
    use DeleteContent\DeleteContentTrait;
    use DeleteKnowledgeBase\DeleteKnowledgeBaseTrait;
    use GetAssistant\GetAssistantTrait;
    use GetAssistantAssociation\GetAssistantAssociationTrait;
    use GetContent\GetContentTrait;
    use GetContentSummary\GetContentSummaryTrait;
    use GetKnowledgeBase\GetKnowledgeBaseTrait;
    use GetRecommendations\GetRecommendationsTrait;
    use GetSession\GetSessionTrait;
    use ListAssistantAssociations\ListAssistantAssociationsTrait;
    use ListAssistants\ListAssistantsTrait;
    use ListContents\ListContentsTrait;
    use ListKnowledgeBases\ListKnowledgeBasesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use NotifyRecommendationsReceived\NotifyRecommendationsReceivedTrait;
    use QueryAssistant\QueryAssistantTrait;
    use RemoveKnowledgeBaseTemplateUri\RemoveKnowledgeBaseTemplateUriTrait;
    use SearchContent\SearchContentTrait;
    use SearchSessions\SearchSessionsTrait;
    use StartContentUpload\StartContentUploadTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateContent\UpdateContentTrait;
    use UpdateKnowledgeBaseTemplateUri\UpdateKnowledgeBaseTemplateUriTrait;
}
