<?php

namespace Sunaoka\Aws\Structures\BedrockAgent;

class BedrockAgentClient extends \Aws\BedrockAgent\BedrockAgentClient
{
    use AssociateAgentKnowledgeBase\AssociateAgentKnowledgeBaseTrait;
    use CreateAgent\CreateAgentTrait;
    use CreateAgentActionGroup\CreateAgentActionGroupTrait;
    use CreateAgentAlias\CreateAgentAliasTrait;
    use CreateDataSource\CreateDataSourceTrait;
    use CreateFlow\CreateFlowTrait;
    use CreateFlowAlias\CreateFlowAliasTrait;
    use CreateFlowVersion\CreateFlowVersionTrait;
    use CreateKnowledgeBase\CreateKnowledgeBaseTrait;
    use CreatePrompt\CreatePromptTrait;
    use CreatePromptVersion\CreatePromptVersionTrait;
    use DeleteAgent\DeleteAgentTrait;
    use DeleteAgentActionGroup\DeleteAgentActionGroupTrait;
    use DeleteAgentAlias\DeleteAgentAliasTrait;
    use DeleteAgentVersion\DeleteAgentVersionTrait;
    use DeleteDataSource\DeleteDataSourceTrait;
    use DeleteFlow\DeleteFlowTrait;
    use DeleteFlowAlias\DeleteFlowAliasTrait;
    use DeleteFlowVersion\DeleteFlowVersionTrait;
    use DeleteKnowledgeBase\DeleteKnowledgeBaseTrait;
    use DeletePrompt\DeletePromptTrait;
    use DisassociateAgentKnowledgeBase\DisassociateAgentKnowledgeBaseTrait;
    use GetAgent\GetAgentTrait;
    use GetAgentActionGroup\GetAgentActionGroupTrait;
    use GetAgentAlias\GetAgentAliasTrait;
    use GetAgentKnowledgeBase\GetAgentKnowledgeBaseTrait;
    use GetAgentVersion\GetAgentVersionTrait;
    use GetDataSource\GetDataSourceTrait;
    use GetFlow\GetFlowTrait;
    use GetFlowAlias\GetFlowAliasTrait;
    use GetFlowVersion\GetFlowVersionTrait;
    use GetIngestionJob\GetIngestionJobTrait;
    use GetKnowledgeBase\GetKnowledgeBaseTrait;
    use GetPrompt\GetPromptTrait;
    use ListAgentActionGroups\ListAgentActionGroupsTrait;
    use ListAgentAliases\ListAgentAliasesTrait;
    use ListAgentKnowledgeBases\ListAgentKnowledgeBasesTrait;
    use ListAgentVersions\ListAgentVersionsTrait;
    use ListAgents\ListAgentsTrait;
    use ListDataSources\ListDataSourcesTrait;
    use ListFlowAliases\ListFlowAliasesTrait;
    use ListFlowVersions\ListFlowVersionsTrait;
    use ListFlows\ListFlowsTrait;
    use ListIngestionJobs\ListIngestionJobsTrait;
    use ListKnowledgeBases\ListKnowledgeBasesTrait;
    use ListPrompts\ListPromptsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PrepareAgent\PrepareAgentTrait;
    use PrepareFlow\PrepareFlowTrait;
    use StartIngestionJob\StartIngestionJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAgent\UpdateAgentTrait;
    use UpdateAgentActionGroup\UpdateAgentActionGroupTrait;
    use UpdateAgentAlias\UpdateAgentAliasTrait;
    use UpdateAgentKnowledgeBase\UpdateAgentKnowledgeBaseTrait;
    use UpdateDataSource\UpdateDataSourceTrait;
    use UpdateFlow\UpdateFlowTrait;
    use UpdateFlowAlias\UpdateFlowAliasTrait;
    use UpdateKnowledgeBase\UpdateKnowledgeBaseTrait;
    use UpdatePrompt\UpdatePromptTrait;
}
