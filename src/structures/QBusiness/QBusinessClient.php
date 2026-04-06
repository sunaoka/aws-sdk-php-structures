<?php

namespace Sunaoka\Aws\Structures\QBusiness;

class QBusinessClient extends \Aws\QBusiness\QBusinessClient
{
    use BatchDeleteDocument\BatchDeleteDocumentTrait;
    use BatchPutDocument\BatchPutDocumentTrait;
    use ChatSync\ChatSyncTrait;
    use CreateApplication\CreateApplicationTrait;
    use CreateDataSource\CreateDataSourceTrait;
    use CreateIndex\CreateIndexTrait;
    use CreatePlugin\CreatePluginTrait;
    use CreateRetriever\CreateRetrieverTrait;
    use CreateUser\CreateUserTrait;
    use CreateWebExperience\CreateWebExperienceTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteChatControlsConfiguration\DeleteChatControlsConfigurationTrait;
    use DeleteConversation\DeleteConversationTrait;
    use DeleteDataSource\DeleteDataSourceTrait;
    use DeleteGroup\DeleteGroupTrait;
    use DeleteIndex\DeleteIndexTrait;
    use DeletePlugin\DeletePluginTrait;
    use DeleteRetriever\DeleteRetrieverTrait;
    use DeleteUser\DeleteUserTrait;
    use DeleteWebExperience\DeleteWebExperienceTrait;
    use GetApplication\GetApplicationTrait;
    use GetChatControlsConfiguration\GetChatControlsConfigurationTrait;
    use GetDataSource\GetDataSourceTrait;
    use GetGroup\GetGroupTrait;
    use GetIndex\GetIndexTrait;
    use GetPlugin\GetPluginTrait;
    use GetRetriever\GetRetrieverTrait;
    use GetUser\GetUserTrait;
    use GetWebExperience\GetWebExperienceTrait;
    use ListApplications\ListApplicationsTrait;
    use ListConversations\ListConversationsTrait;
    use ListDataSourceSyncJobs\ListDataSourceSyncJobsTrait;
    use ListDataSources\ListDataSourcesTrait;
    use ListDocuments\ListDocumentsTrait;
    use ListGroups\ListGroupsTrait;
    use ListIndices\ListIndicesTrait;
    use ListMessages\ListMessagesTrait;
    use ListPlugins\ListPluginsTrait;
    use ListRetrievers\ListRetrieversTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWebExperiences\ListWebExperiencesTrait;
    use PutFeedback\PutFeedbackTrait;
    use PutGroup\PutGroupTrait;
    use StartDataSourceSyncJob\StartDataSourceSyncJobTrait;
    use StopDataSourceSyncJob\StopDataSourceSyncJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplication\UpdateApplicationTrait;
    use UpdateChatControlsConfiguration\UpdateChatControlsConfigurationTrait;
    use UpdateDataSource\UpdateDataSourceTrait;
    use UpdateIndex\UpdateIndexTrait;
    use UpdatePlugin\UpdatePluginTrait;
    use UpdateRetriever\UpdateRetrieverTrait;
    use UpdateUser\UpdateUserTrait;
    use UpdateWebExperience\UpdateWebExperienceTrait;
}
