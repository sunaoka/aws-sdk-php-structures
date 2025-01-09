<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Command
 * @property list<BatchEnvironmentVariable> $Environment
 * @property string $InstanceType
 * @property list<BatchResourceRequirement> $ResourceRequirements
 */
class BatchContainerOverrides extends Shape
{
    /**
     * @param array{
     *     Command?: list<string>,
     *     Environment?: list<BatchEnvironmentVariable>,
     *     InstanceType?: string,
     *     ResourceRequirements?: list<BatchResourceRequirement>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
