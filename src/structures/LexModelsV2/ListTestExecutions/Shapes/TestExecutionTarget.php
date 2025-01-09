<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BotAliasTestExecutionTarget $botAliasTarget
 */
class TestExecutionTarget extends Shape
{
    /**
     * @param array{botAliasTarget?: BotAliasTestExecutionTarget} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
