<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartTestExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $testExecutionId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property string|null $testSetId
 * @property Shapes\TestExecutionTarget|null $target
 * @property 'Streaming'|'NonStreaming'|null $apiMode
 * @property 'Text'|'Audio'|null $testExecutionModality
 */
class StartTestExecutionResponse extends Response
{
}
