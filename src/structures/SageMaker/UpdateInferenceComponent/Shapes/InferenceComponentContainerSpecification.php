<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Image
 * @property string $ArtifactUrl
 * @property array<string, string> $Environment
 */
class InferenceComponentContainerSpecification extends Shape
{
    /**
     * @param array{
     *     Image?: string,
     *     ArtifactUrl?: string,
     *     Environment?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
