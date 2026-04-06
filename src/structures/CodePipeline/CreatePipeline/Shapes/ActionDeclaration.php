<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ActionTypeId $actionTypeId
 * @property int<1, 999>|null $runOrder
 * @property array<string, string>|null $configuration
 * @property list<OutputArtifact>|null $outputArtifacts
 * @property list<InputArtifact>|null $inputArtifacts
 * @property string|null $roleArn
 * @property string|null $region
 * @property string|null $namespace
 */
class ActionDeclaration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     actionTypeId: ActionTypeId,
     *     runOrder?: int<1, 999>|null,
     *     configuration?: array<string, string>|null,
     *     outputArtifacts?: list<OutputArtifact>|null,
     *     inputArtifacts?: list<InputArtifact>|null,
     *     roleArn?: string|null,
     *     region?: string|null,
     *     namespace?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
