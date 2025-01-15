<?php

namespace Sunaoka\Aws\Structures\SageMaker\QueryLineage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Type
 * @property 'TrialComponent'|'Artifact'|'Context'|'Action'|null $LineageType
 */
class Vertex extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Type?: string|null,
     *     LineageType?: 'TrialComponent'|'Artifact'|'Context'|'Action'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
