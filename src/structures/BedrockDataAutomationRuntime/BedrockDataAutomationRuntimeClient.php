<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime;

class BedrockDataAutomationRuntimeClient extends \Aws\BedrockDataAutomationRuntime\BedrockDataAutomationRuntimeClient
{
    use GetDataAutomationStatus\GetDataAutomationStatusTrait;
    use InvokeDataAutomationAsync\InvokeDataAutomationAsyncTrait;
}
