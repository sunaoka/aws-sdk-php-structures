<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeWorkspaceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkspaceConfigurationStatus $status
 * @property list<LimitsPerLabelSet>|null $limitsPerLabelSet
 * @property int<1, max>|null $retentionPeriodInDays
 */
class WorkspaceConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     status: WorkspaceConfigurationStatus,
     *     limitsPerLabelSet?: list<LimitsPerLabelSet>|null,
     *     retentionPeriodInDays?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
