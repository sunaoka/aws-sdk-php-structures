<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAdvancedPromptOptimizationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobArn
 * @property string $jobName
 * @property string|null $jobDescription
 * @property 'InProgress'|'Completed'|'Failed'|'PartiallyCompleted'|'Stopping'|'Stopped'|'Deleting' $jobStatus
 * @property Shapes\AdvancedPromptOptimizationInputConfig $inputConfig
 * @property Shapes\AdvancedPromptOptimizationOutputConfig $outputConfig
 * @property string|null $encryptionKeyArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property string|null $failureMessage
 * @property list<Shapes\ModelConfiguration> $modelConfigurations
 */
class GetAdvancedPromptOptimizationJobResponse extends Response
{
}
