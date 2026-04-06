<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime;

class BedrockDataAutomationRuntimeClient extends \Aws\BedrockDataAutomationRuntime\BedrockDataAutomationRuntimeClient
{
    use GetDataAutomationStatus\GetDataAutomationStatusTrait;
    use InvokeDataAutomation\InvokeDataAutomationTrait;
    use InvokeDataAutomationAsync\InvokeDataAutomationAsyncTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
