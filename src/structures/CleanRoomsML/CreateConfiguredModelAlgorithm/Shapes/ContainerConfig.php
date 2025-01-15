<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageUri
 * @property list<string>|null $entrypoint
 * @property list<string>|null $arguments
 * @property list<MetricDefinition>|null $metricDefinitions
 */
class ContainerConfig extends Shape
{
    /**
     * @param array{
     *     imageUri: string,
     *     entrypoint?: list<string>|null,
     *     arguments?: list<string>|null,
     *     metricDefinitions?: list<MetricDefinition>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
