<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartTestExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $testExecutionId
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property string $testSetId
 * @property Shapes\TestExecutionTarget $target
 * @property 'Streaming'|'NonStreaming' $apiMode
 * @property 'Text'|'Audio' $testExecutionModality
 */
class StartTestExecutionResponse extends Response
{
}
