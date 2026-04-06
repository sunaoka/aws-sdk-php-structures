<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime;

class BedrockAgentRuntimeClient extends \Aws\BedrockAgentRuntime\BedrockAgentRuntimeClient
{
    use DeleteAgentMemory\DeleteAgentMemoryTrait;
    use GetAgentMemory\GetAgentMemoryTrait;
    use InvokeAgent\InvokeAgentTrait;
    use InvokeFlow\InvokeFlowTrait;
    use Retrieve\RetrieveTrait;
    use RetrieveAndGenerate\RetrieveAndGenerateTrait;
}
