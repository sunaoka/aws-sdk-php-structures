<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $command
 * @property list<KeyValuePair>|null $environment
 * @property string|null $name
 * @property list<ResourceRequirement>|null $resourceRequirements
 */
class TaskContainerOverrides extends Shape
{
    /**
     * @param array{
     *     command?: list<string>|null,
     *     environment?: list<KeyValuePair>|null,
     *     name?: string|null,
     *     resourceRequirements?: list<ResourceRequirement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
