<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateTestSetDiscrepancyReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botId
 * @property string $botAliasId
 * @property string $localeId
 */
class TestSetDiscrepancyReportBotAliasTarget extends Shape
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
