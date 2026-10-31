<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutAccountPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $totalMatchedLogGroups
 * @property int<0, max>|null $increasedRetentionLogGroupCount
 * @property int<0, max>|null $decreasedRetentionLogGroupCount
 * @property int<0, max>|null $unchangedRetentionLogGroupCount
 * @property int<0, max>|null $failedAnalysisCount
 * @property list<LogGroupImpact>|null $topLogGroupsImpacted
 */
class DryRunResult extends Shape
{
    /**
     * @param array{
     *     totalMatchedLogGroups?: int<0, max>|null,
     *     increasedRetentionLogGroupCount?: int<0, max>|null,
     *     decreasedRetentionLogGroupCount?: int<0, max>|null,
     *     unchangedRetentionLogGroupCount?: int<0, max>|null,
     *     failedAnalysisCount?: int<0, max>|null,
     *     topLogGroupsImpacted?: list<LogGroupImpact>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
