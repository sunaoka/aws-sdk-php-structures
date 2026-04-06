<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime;

class BedrockRuntimeClient extends \Aws\BedrockRuntime\BedrockRuntimeClient
{
    use ApplyGuardrail\ApplyGuardrailTrait;
    use Converse\ConverseTrait;
    use ConverseStream\ConverseStreamTrait;
    use InvokeModel\InvokeModelTrait;
    use InvokeModelWithResponseStream\InvokeModelWithResponseStreamTrait;
}
