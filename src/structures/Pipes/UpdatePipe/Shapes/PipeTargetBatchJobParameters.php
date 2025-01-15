<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobDefinition
 * @property string $JobName
 * @property BatchArrayProperties|null $ArrayProperties
 * @property BatchRetryStrategy|null $RetryStrategy
 * @property BatchContainerOverrides|null $ContainerOverrides
 * @property list<BatchJobDependency>|null $DependsOn
 * @property array<string, string>|null $Parameters
 */
class PipeTargetBatchJobParameters extends Shape
{
    /**
     * @param array{
     *     JobDefinition: string,
     *     JobName: string,
     *     ArrayProperties?: BatchArrayProperties|null,
     *     RetryStrategy?: BatchRetryStrategy|null,
     *     ContainerOverrides?: BatchContainerOverrides|null,
     *     DependsOn?: list<BatchJobDependency>|null,
     *     Parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
