<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Command
 * @property list<BatchEnvironmentVariable>|null $Environment
 * @property string|null $InstanceType
 * @property list<BatchResourceRequirement>|null $ResourceRequirements
 */
class BatchContainerOverrides extends Shape
{
    /**
     * @param array{
     *     Command?: list<string>|null,
     *     Environment?: list<BatchEnvironmentVariable>|null,
     *     InstanceType?: string|null,
     *     ResourceRequirements?: list<BatchResourceRequirement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
