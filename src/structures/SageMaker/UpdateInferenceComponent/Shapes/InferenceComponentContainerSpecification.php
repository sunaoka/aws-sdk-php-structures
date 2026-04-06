<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Image
 * @property string|null $ArtifactUrl
 * @property array<string, string>|null $Environment
 */
class InferenceComponentContainerSpecification extends Shape
{
    /**
     * @param array{
     *     Image?: string|null,
     *     ArtifactUrl?: string|null,
     *     Environment?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
