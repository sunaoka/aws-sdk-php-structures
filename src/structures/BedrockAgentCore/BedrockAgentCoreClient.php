<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore;

class BedrockAgentCoreClient extends \Aws\BedrockAgentCore\BedrockAgentCoreClient
{
    use BatchCreateMemoryRecords\BatchCreateMemoryRecordsTrait;
    use BatchDeleteMemoryRecords\BatchDeleteMemoryRecordsTrait;
    use BatchUpdateMemoryRecords\BatchUpdateMemoryRecordsTrait;
    use CompleteResourceTokenAuth\CompleteResourceTokenAuthTrait;
    use CreateABTest\CreateABTestTrait;
    use CreateEvent\CreateEventTrait;
    use DeleteABTest\DeleteABTestTrait;
    use DeleteBatchEvaluation\DeleteBatchEvaluationTrait;
    use DeleteEvent\DeleteEventTrait;
    use DeleteMemoryRecord\DeleteMemoryRecordTrait;
    use DeleteRecommendation\DeleteRecommendationTrait;
    use Evaluate\EvaluateTrait;
    use GetABTest\GetABTestTrait;
    use GetAgentCard\GetAgentCardTrait;
    use GetBatchEvaluation\GetBatchEvaluationTrait;
    use GetBrowserSession\GetBrowserSessionTrait;
    use GetCodeInterpreterSession\GetCodeInterpreterSessionTrait;
    use GetEvent\GetEventTrait;
    use GetMemoryRecord\GetMemoryRecordTrait;
    use GetRecommendation\GetRecommendationTrait;
    use GetResourceApiKey\GetResourceApiKeyTrait;
    use GetResourceOauth2Token\GetResourceOauth2TokenTrait;
    use GetWorkloadAccessToken\GetWorkloadAccessTokenTrait;
    use GetWorkloadAccessTokenForJWT\GetWorkloadAccessTokenForJWTTrait;
    use GetWorkloadAccessTokenForUserId\GetWorkloadAccessTokenForUserIdTrait;
    use InvokeAgentRuntime\InvokeAgentRuntimeTrait;
    use InvokeAgentRuntimeCommand\InvokeAgentRuntimeCommandTrait;
    use InvokeBrowser\InvokeBrowserTrait;
    use InvokeCodeInterpreter\InvokeCodeInterpreterTrait;
    use InvokeHarness\InvokeHarnessTrait;
    use ListABTests\ListABTestsTrait;
    use ListActors\ListActorsTrait;
    use ListBatchEvaluations\ListBatchEvaluationsTrait;
    use ListBrowserSessions\ListBrowserSessionsTrait;
    use ListCodeInterpreterSessions\ListCodeInterpreterSessionsTrait;
    use ListEvents\ListEventsTrait;
    use ListMemoryExtractionJobs\ListMemoryExtractionJobsTrait;
    use ListMemoryRecords\ListMemoryRecordsTrait;
    use ListRecommendations\ListRecommendationsTrait;
    use ListSessions\ListSessionsTrait;
    use RetrieveMemoryRecords\RetrieveMemoryRecordsTrait;
    use SaveBrowserSessionProfile\SaveBrowserSessionProfileTrait;
    use SearchRegistryRecords\SearchRegistryRecordsTrait;
    use StartBatchEvaluation\StartBatchEvaluationTrait;
    use StartBrowserSession\StartBrowserSessionTrait;
    use StartCodeInterpreterSession\StartCodeInterpreterSessionTrait;
    use StartMemoryExtractionJob\StartMemoryExtractionJobTrait;
    use StartRecommendation\StartRecommendationTrait;
    use StopBatchEvaluation\StopBatchEvaluationTrait;
    use StopBrowserSession\StopBrowserSessionTrait;
    use StopCodeInterpreterSession\StopCodeInterpreterSessionTrait;
    use StopRuntimeSession\StopRuntimeSessionTrait;
    use UpdateABTest\UpdateABTestTrait;
    use UpdateBrowserStream\UpdateBrowserStreamTrait;
}
