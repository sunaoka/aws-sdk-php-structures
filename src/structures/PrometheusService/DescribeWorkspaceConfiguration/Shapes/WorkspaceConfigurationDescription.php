<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeWorkspaceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LimitsPerLabelSet>|null $limitsPerLabelSet
 * @property int<1, max>|null $retentionPeriodInDays
 * @property WorkspaceConfigurationStatus $status
 */
class WorkspaceConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     limitsPerLabelSet?: list<LimitsPerLabelSet>|null,
     *     retentionPeriodInDays?: int<1, max>|null,
     *     status: WorkspaceConfigurationStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
