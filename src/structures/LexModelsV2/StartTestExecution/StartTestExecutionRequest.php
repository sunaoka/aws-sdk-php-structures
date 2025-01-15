<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartTestExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSetId
 * @property Shapes\TestExecutionTarget $target
 * @property 'Streaming'|'NonStreaming' $apiMode
 * @property 'Text'|'Audio'|null $testExecutionModality
 */
class StartTestExecutionRequest extends Request
{
    /**
     * @param array{
     *     testSetId: string,
     *     target: Shapes\TestExecutionTarget,
     *     apiMode: 'Streaming'|'NonStreaming',
     *     testExecutionModality?: 'Text'|'Audio'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
