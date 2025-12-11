<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $ActionArns
 * @property array<string, string>|null $ArtifactArns
 * @property array<string, string>|null $ContextArns
 * @property list<AssociationInfo>|null $Associations
 */
class LineageMetadata extends Shape
{
    /**
     * @param array{
     *     ActionArns?: array<string, string>|null,
     *     ArtifactArns?: array<string, string>|null,
     *     ContextArns?: array<string, string>|null,
     *     Associations?: list<AssociationInfo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
