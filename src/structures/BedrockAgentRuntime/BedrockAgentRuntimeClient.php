<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime;

class BedrockAgentRuntimeClient extends \Aws\BedrockAgentRuntime\BedrockAgentRuntimeClient
{
    use DeleteAgentMemory\DeleteAgentMemoryTrait;
    use GenerateQuery\GenerateQueryTrait;
    use GetAgentMemory\GetAgentMemoryTrait;
    use InvokeAgent\InvokeAgentTrait;
    use InvokeFlow\InvokeFlowTrait;
    use InvokeInlineAgent\InvokeInlineAgentTrait;
    use OptimizePrompt\OptimizePromptTrait;
    use Rerank\RerankTrait;
    use Retrieve\RetrieveTrait;
    use RetrieveAndGenerate\RetrieveAndGenerateTrait;
    use RetrieveAndGenerateStream\RetrieveAndGenerateStreamTrait;
}
