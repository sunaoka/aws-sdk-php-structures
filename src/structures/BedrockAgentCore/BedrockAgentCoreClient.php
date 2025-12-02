<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore;

class BedrockAgentCoreClient extends \Aws\BedrockAgentCore\BedrockAgentCoreClient
{
    use BatchCreateMemoryRecords\BatchCreateMemoryRecordsTrait;
    use BatchDeleteMemoryRecords\BatchDeleteMemoryRecordsTrait;
    use BatchUpdateMemoryRecords\BatchUpdateMemoryRecordsTrait;
    use CompleteResourceTokenAuth\CompleteResourceTokenAuthTrait;
    use CreateEvent\CreateEventTrait;
    use DeleteEvent\DeleteEventTrait;
    use DeleteMemoryRecord\DeleteMemoryRecordTrait;
    use Evaluate\EvaluateTrait;
    use GetAgentCard\GetAgentCardTrait;
    use GetBrowserSession\GetBrowserSessionTrait;
    use GetCodeInterpreterSession\GetCodeInterpreterSessionTrait;
    use GetEvent\GetEventTrait;
    use GetMemoryRecord\GetMemoryRecordTrait;
    use GetResourceApiKey\GetResourceApiKeyTrait;
    use GetResourceOauth2Token\GetResourceOauth2TokenTrait;
    use GetWorkloadAccessToken\GetWorkloadAccessTokenTrait;
    use GetWorkloadAccessTokenForJWT\GetWorkloadAccessTokenForJWTTrait;
    use GetWorkloadAccessTokenForUserId\GetWorkloadAccessTokenForUserIdTrait;
    use InvokeAgentRuntime\InvokeAgentRuntimeTrait;
    use InvokeCodeInterpreter\InvokeCodeInterpreterTrait;
    use ListActors\ListActorsTrait;
    use ListBrowserSessions\ListBrowserSessionsTrait;
    use ListCodeInterpreterSessions\ListCodeInterpreterSessionsTrait;
    use ListEvents\ListEventsTrait;
    use ListMemoryExtractionJobs\ListMemoryExtractionJobsTrait;
    use ListMemoryRecords\ListMemoryRecordsTrait;
    use ListSessions\ListSessionsTrait;
    use RetrieveMemoryRecords\RetrieveMemoryRecordsTrait;
    use StartBrowserSession\StartBrowserSessionTrait;
    use StartCodeInterpreterSession\StartCodeInterpreterSessionTrait;
    use StartMemoryExtractionJob\StartMemoryExtractionJobTrait;
    use StopBrowserSession\StopBrowserSessionTrait;
    use StopCodeInterpreterSession\StopCodeInterpreterSessionTrait;
    use StopRuntimeSession\StopRuntimeSessionTrait;
    use UpdateBrowserStream\UpdateBrowserStreamTrait;
}
