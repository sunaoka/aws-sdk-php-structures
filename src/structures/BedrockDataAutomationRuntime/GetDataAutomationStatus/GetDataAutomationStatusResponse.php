<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\GetDataAutomationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Created'|'InProgress'|'Success'|'ServiceError'|'ClientError'|null $status
 * @property string|null $errorType
 * @property string|null $errorMessage
 * @property Shapes\OutputConfiguration|null $outputConfiguration
 */
class GetDataAutomationStatusResponse extends Response
{
}
