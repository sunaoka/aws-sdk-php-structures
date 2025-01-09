<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocalPath
 * @property string $S3OutputPath
 * @property array<string, string> $HookParameters
 * @property list<CollectionConfiguration> $CollectionConfigurations
 */
class DebugHookConfig extends Shape
{
    /**
     * @param array{
     *     LocalPath?: string,
     *     S3OutputPath: string,
     *     HookParameters?: array<string, string>,
     *     CollectionConfigurations?: list<CollectionConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
