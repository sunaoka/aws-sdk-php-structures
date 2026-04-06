<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent;

class DevOpsAgentClient extends \Aws\DevOpsAgent\DevOpsAgentClient
{
    use AllowVendedLogDeliveryForResource\AllowVendedLogDeliveryForResourceTrait;
    use AssociateService\AssociateServiceTrait;
    use CreateAgentSpace\CreateAgentSpaceTrait;
    use CreateBacklogTask\CreateBacklogTaskTrait;
    use CreateChat\CreateChatTrait;
    use CreatePrivateConnection\CreatePrivateConnectionTrait;
    use DeleteAgentSpace\DeleteAgentSpaceTrait;
    use DeletePrivateConnection\DeletePrivateConnectionTrait;
    use DeregisterService\DeregisterServiceTrait;
    use DescribePrivateConnection\DescribePrivateConnectionTrait;
    use DisableOperatorApp\DisableOperatorAppTrait;
    use DisassociateService\DisassociateServiceTrait;
    use EnableOperatorApp\EnableOperatorAppTrait;
    use GetAccountUsage\GetAccountUsageTrait;
    use GetAgentSpace\GetAgentSpaceTrait;
    use GetAssociation\GetAssociationTrait;
    use GetBacklogTask\GetBacklogTaskTrait;
    use GetOperatorApp\GetOperatorAppTrait;
    use GetRecommendation\GetRecommendationTrait;
    use GetService\GetServiceTrait;
    use ListAgentSpaces\ListAgentSpacesTrait;
    use ListAssociations\ListAssociationsTrait;
    use ListBacklogTasks\ListBacklogTasksTrait;
    use ListChats\ListChatsTrait;
    use ListExecutions\ListExecutionsTrait;
    use ListGoals\ListGoalsTrait;
    use ListJournalRecords\ListJournalRecordsTrait;
    use ListPendingMessages\ListPendingMessagesTrait;
    use ListPrivateConnections\ListPrivateConnectionsTrait;
    use ListRecommendations\ListRecommendationsTrait;
    use ListServices\ListServicesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWebhooks\ListWebhooksTrait;
    use RegisterService\RegisterServiceTrait;
    use SendMessage\SendMessageTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAgentSpace\UpdateAgentSpaceTrait;
    use UpdateAssociation\UpdateAssociationTrait;
    use UpdateBacklogTask\UpdateBacklogTaskTrait;
    use UpdateGoal\UpdateGoalTrait;
    use UpdateOperatorAppIdpConfig\UpdateOperatorAppIdpConfigTrait;
    use UpdatePrivateConnectionCertificate\UpdatePrivateConnectionCertificateTrait;
    use UpdateRecommendation\UpdateRecommendationTrait;
    use ValidateAwsAssociations\ValidateAwsAssociationsTrait;
}
