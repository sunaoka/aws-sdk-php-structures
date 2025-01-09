<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageUri
 * @property list<string> $entrypoint
 * @property list<string> $arguments
 * @property list<MetricDefinition> $metricDefinitions
 */
class ContainerConfig extends Shape
{
    /**
     * @param array{
     *     imageUri: string,
     *     entrypoint?: list<string>,
     *     arguments?: list<string>,
     *     metricDefinitions?: list<MetricDefinition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
