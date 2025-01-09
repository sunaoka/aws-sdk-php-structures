<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $roleArn
 * @property Shapes\ContainerConfig $trainingContainerConfig
 * @property Shapes\InferenceContainerConfig $inferenceContainerConfig
 * @property array<string, string> $tags
 * @property string $kmsKeyArn
 */
class CreateConfiguredModelAlgorithmRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     roleArn: string,
     *     trainingContainerConfig?: Shapes\ContainerConfig,
     *     inferenceContainerConfig?: Shapes\InferenceContainerConfig,
     *     tags?: array<string, string>,
     *     kmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
