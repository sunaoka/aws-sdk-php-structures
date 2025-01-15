<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateTestSetDiscrepancyReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TestSetDiscrepancyReportBotAliasTarget|null $botAliasTarget
 */
class TestSetDiscrepancyReportResourceTarget extends Shape
{
    /**
     * @param array{botAliasTarget?: TestSetDiscrepancyReportBotAliasTarget|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
