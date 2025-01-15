<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConversationLogsDataSource|null $conversationLogsDataSource
 */
class TestSetGenerationDataSource extends Shape
{
    /**
     * @param array{conversationLogsDataSource?: ConversationLogsDataSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
