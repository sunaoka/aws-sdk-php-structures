<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botId
 * @property string $botAliasId
 * @property string $localeId
 */
class BotAliasTestExecutionTarget extends Shape
{
    /**
     * @param array{
     *     botId: string,
     *     botAliasId: string,
     *     localeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
