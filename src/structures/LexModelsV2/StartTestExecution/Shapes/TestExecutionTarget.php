<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartTestExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BotAliasTestExecutionTarget|null $botAliasTarget
 */
class TestExecutionTarget extends Shape
{
    /**
     * @param array{botAliasTarget?: BotAliasTestExecutionTarget|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
