<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeWorkspaceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkspaceConfigurationStatus $status
 * @property list<LimitsPerLabelSet>|null $limitsPerLabelSet
 * @property int<1, max>|null $retentionPeriodInDays
 * @property int<0, max>|null $outOfOrderTimeWindowInSeconds
 * @property int<0, max>|null $ruleQueryOffsetInSeconds
 */
class WorkspaceConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     status: WorkspaceConfigurationStatus,
     *     limitsPerLabelSet?: list<LimitsPerLabelSet>|null,
     *     retentionPeriodInDays?: int<1, max>|null,
     *     outOfOrderTimeWindowInSeconds?: int<0, max>|null,
     *     ruleQueryOffsetInSeconds?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
