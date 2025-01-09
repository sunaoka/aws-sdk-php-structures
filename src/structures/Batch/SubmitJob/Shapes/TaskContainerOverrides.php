<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $command
 * @property list<KeyValuePair> $environment
 * @property string $name
 * @property list<ResourceRequirement> $resourceRequirements
 */
class TaskContainerOverrides extends Shape
{
    /**
     * @param array{
     *     command?: list<string>,
     *     environment?: list<KeyValuePair>,
     *     name?: string,
     *     resourceRequirements?: list<ResourceRequirement>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
