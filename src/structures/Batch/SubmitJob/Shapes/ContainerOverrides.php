<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $vcpus
 * @property int|null $memory
 * @property list<string>|null $command
 * @property string|null $instanceType
 * @property list<KeyValuePair>|null $environment
 * @property list<ResourceRequirement>|null $resourceRequirements
 */
class ContainerOverrides extends Shape
{
    /**
     * @param array{
     *     vcpus?: int|null,
     *     memory?: int|null,
     *     command?: list<string>|null,
     *     instanceType?: string|null,
     *     environment?: list<KeyValuePair>|null,
     *     resourceRequirements?: list<ResourceRequirement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
