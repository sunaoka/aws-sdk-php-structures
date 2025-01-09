<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\GetDataAutomationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Created'|'InProgress'|'Success'|'ServiceError'|'ClientError' $status
 * @property string $errorType
 * @property string $errorMessage
 * @property Shapes\OutputConfiguration $outputConfiguration
 */
class GetDataAutomationStatusResponse extends Response
{
}
