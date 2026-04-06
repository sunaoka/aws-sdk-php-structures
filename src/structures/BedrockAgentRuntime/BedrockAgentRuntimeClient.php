<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime;

class BedrockAgentRuntimeClient extends \Aws\BedrockAgentRuntime\BedrockAgentRuntimeClient
{
    use CreateInvocation\CreateInvocationTrait;
    use CreateSession\CreateSessionTrait;
    use DeleteAgentMemory\DeleteAgentMemoryTrait;
    use DeleteSession\DeleteSessionTrait;
    use EndSession\EndSessionTrait;
    use GenerateQuery\GenerateQueryTrait;
    use GetAgentMemory\GetAgentMemoryTrait;
    use GetExecutionFlowSnapshot\GetExecutionFlowSnapshotTrait;
    use GetFlowExecution\GetFlowExecutionTrait;
    use GetInvocationStep\GetInvocationStepTrait;
    use GetSession\GetSessionTrait;
    use InvokeAgent\InvokeAgentTrait;
    use InvokeFlow\InvokeFlowTrait;
    use InvokeInlineAgent\InvokeInlineAgentTrait;
    use ListFlowExecutionEvents\ListFlowExecutionEventsTrait;
    use ListFlowExecutions\ListFlowExecutionsTrait;
    use ListInvocationSteps\ListInvocationStepsTrait;
    use ListInvocations\ListInvocationsTrait;
    use ListSessions\ListSessionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use OptimizePrompt\OptimizePromptTrait;
    use PutInvocationStep\PutInvocationStepTrait;
    use Rerank\RerankTrait;
    use Retrieve\RetrieveTrait;
    use RetrieveAndGenerate\RetrieveAndGenerateTrait;
    use RetrieveAndGenerateStream\RetrieveAndGenerateStreamTrait;
    use StartFlowExecution\StartFlowExecutionTrait;
    use StopFlowExecution\StopFlowExecutionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateSession\UpdateSessionTrait;
}
