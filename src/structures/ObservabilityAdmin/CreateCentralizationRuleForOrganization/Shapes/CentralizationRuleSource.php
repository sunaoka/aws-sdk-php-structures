<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Regions
 * @property string|null $Scope
 * @property SourceLogsConfiguration|null $SourceLogsConfiguration
 * @property SourceMetricsConfiguration|null $SourceMetricsConfiguration
 * @property SourceContextGraphConfiguration|null $SourceContextGraphConfiguration
 */
class CentralizationRuleSource extends Shape
{
    /**
     * @param array{
     *     Regions: list<string>,
     *     Scope?: string|null,
     *     SourceLogsConfiguration?: SourceLogsConfiguration|null,
     *     SourceMetricsConfiguration?: SourceMetricsConfiguration|null,
     *     SourceContextGraphConfiguration?: SourceContextGraphConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
