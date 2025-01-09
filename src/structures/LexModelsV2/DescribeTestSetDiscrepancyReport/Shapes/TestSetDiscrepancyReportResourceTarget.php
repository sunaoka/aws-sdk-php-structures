<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetDiscrepancyReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TestSetDiscrepancyReportBotAliasTarget $botAliasTarget
 */
class TestSetDiscrepancyReportResourceTarget extends Shape
{
    /**
     * @param array{botAliasTarget?: TestSetDiscrepancyReportBotAliasTarget} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
