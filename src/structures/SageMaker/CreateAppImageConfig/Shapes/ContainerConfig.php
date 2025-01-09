<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAppImageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ContainerArguments
 * @property list<string> $ContainerEntrypoint
 * @property array<string, string> $ContainerEnvironmentVariables
 */
class ContainerConfig extends Shape
{
    /**
     * @param array{
     *     ContainerArguments?: list<string>,
     *     ContainerEntrypoint?: list<string>,
     *     ContainerEnvironmentVariables?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
