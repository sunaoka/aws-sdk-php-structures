<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartTestSetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConversationLogsDataSource $conversationLogsDataSource
 */
class TestSetGenerationDataSource extends Shape
{
    /**
     * @param array{conversationLogsDataSource?: ConversationLogsDataSource} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
