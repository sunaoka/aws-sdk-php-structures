<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchArrayProperties|null $ArrayProperties
 * @property BatchContainerOverrides|null $ContainerOverrides
 * @property list<BatchJobDependency>|null $DependsOn
 * @property string $JobDefinition
 * @property string $JobName
 * @property array<string, string>|null $Parameters
 * @property BatchRetryStrategy|null $RetryStrategy
 */
class PipeTargetBatchJobParameters extends Shape
{
    /**
     * @param array{
     *     ArrayProperties?: BatchArrayProperties|null,
     *     ContainerOverrides?: BatchContainerOverrides|null,
     *     DependsOn?: list<BatchJobDependency>|null,
     *     JobDefinition: string,
     *     JobName: string,
     *     Parameters?: array<string, string>|null,
     *     RetryStrategy?: BatchRetryStrategy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
