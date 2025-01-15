<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMonitoringSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageUri
 * @property list<string>|null $ContainerEntrypoint
 * @property list<string>|null $ContainerArguments
 * @property string|null $RecordPreprocessorSourceUri
 * @property string|null $PostAnalyticsProcessorSourceUri
 */
class MonitoringAppSpecification extends Shape
{
    /**
     * @param array{
     *     ImageUri: string,
     *     ContainerEntrypoint?: list<string>|null,
     *     ContainerArguments?: list<string>|null,
     *     RecordPreprocessorSourceUri?: string|null,
     *     PostAnalyticsProcessorSourceUri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
