<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListTelemetryPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Source>|null $Sources
 * @property list<DataSource>|null $DataSources
 * @property list<string>|null $Processors
 * @property int|null $ProcessorCount
 * @property list<string>|null $Sinks
 */
class ConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     Sources?: list<Source>|null,
     *     DataSources?: list<DataSource>|null,
     *     Processors?: list<string>|null,
     *     ProcessorCount?: int|null,
     *     Sinks?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
