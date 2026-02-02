<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetBlueprintOptimizationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Created'|'InProgress'|'Success'|'ServiceError'|'ClientError'|null $status
 * @property string|null $errorType
 * @property string|null $errorMessage
 * @property Shapes\BlueprintOptimizationOutputConfiguration|null $outputConfiguration
 */
class GetBlueprintOptimizationStatusResponse extends Response
{
}
