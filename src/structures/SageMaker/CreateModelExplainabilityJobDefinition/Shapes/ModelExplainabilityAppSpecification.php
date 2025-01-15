<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelExplainabilityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageUri
 * @property string $ConfigUri
 * @property array<string, string>|null $Environment
 */
class ModelExplainabilityAppSpecification extends Shape
{
    /**
     * @param array{
     *     ImageUri: string,
     *     ConfigUri: string,
     *     Environment?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
