<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAppImageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ContainerArguments
 * @property list<string>|null $ContainerEntrypoint
 * @property array<string, string>|null $ContainerEnvironmentVariables
 */
class ContainerConfig extends Shape
{
    /**
     * @param array{
     *     ContainerArguments?: list<string>|null,
     *     ContainerEntrypoint?: list<string>|null,
     *     ContainerEnvironmentVariables?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
