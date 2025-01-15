<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocalPath
 * @property string $S3OutputPath
 * @property array<string, string>|null $HookParameters
 * @property list<CollectionConfiguration>|null $CollectionConfigurations
 */
class DebugHookConfig extends Shape
{
    /**
     * @param array{
     *     LocalPath?: string|null,
     *     S3OutputPath: string,
     *     HookParameters?: array<string, string>|null,
     *     CollectionConfigurations?: list<CollectionConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
