<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $vcpus
 * @property int $memory
 * @property list<string> $command
 * @property string $instanceType
 * @property list<KeyValuePair> $environment
 * @property list<ResourceRequirement> $resourceRequirements
 */
class ContainerOverrides extends Shape
{
    /**
     * @param array{
     *     vcpus?: int,
     *     memory?: int,
     *     command?: list<string>,
     *     instanceType?: string,
     *     environment?: list<KeyValuePair>,
     *     resourceRequirements?: list<ResourceRequirement>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
