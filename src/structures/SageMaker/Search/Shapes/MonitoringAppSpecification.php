<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageUri
 * @property list<string> $ContainerEntrypoint
 * @property list<string> $ContainerArguments
 * @property string $RecordPreprocessorSourceUri
 * @property string $PostAnalyticsProcessorSourceUri
 */
class MonitoringAppSpecification extends Shape
{
    /**
     * @param array{
     *     ImageUri: string,
     *     ContainerEntrypoint?: list<string>,
     *     ContainerArguments?: list<string>,
     *     RecordPreprocessorSourceUri?: string,
     *     PostAnalyticsProcessorSourceUri?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
