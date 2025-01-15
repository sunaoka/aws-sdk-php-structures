<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $roleArn
 * @property Shapes\ContainerConfig|null $trainingContainerConfig
 * @property Shapes\InferenceContainerConfig|null $inferenceContainerConfig
 * @property array<string, string>|null $tags
 * @property string|null $kmsKeyArn
 */
class CreateConfiguredModelAlgorithmRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     roleArn: string,
     *     trainingContainerConfig?: Shapes\ContainerConfig|null,
     *     inferenceContainerConfig?: Shapes\InferenceContainerConfig|null,
     *     tags?: array<string, string>|null,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
