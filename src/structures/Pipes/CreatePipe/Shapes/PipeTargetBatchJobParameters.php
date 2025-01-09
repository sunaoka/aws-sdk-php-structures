<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobDefinition
 * @property string $JobName
 * @property BatchArrayProperties $ArrayProperties
 * @property BatchRetryStrategy $RetryStrategy
 * @property BatchContainerOverrides $ContainerOverrides
 * @property list<BatchJobDependency> $DependsOn
 * @property array<string, string> $Parameters
 */
class PipeTargetBatchJobParameters extends Shape
{
    /**
     * @param array{
     *     JobDefinition: string,
     *     JobName: string,
     *     ArrayProperties?: BatchArrayProperties,
     *     RetryStrategy?: BatchRetryStrategy,
     *     ContainerOverrides?: BatchContainerOverrides,
     *     DependsOn?: list<BatchJobDependency>,
     *     Parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
