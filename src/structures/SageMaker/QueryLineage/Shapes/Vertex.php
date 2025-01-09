<?php

namespace Sunaoka\Aws\Structures\SageMaker\QueryLineage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Type
 * @property 'TrialComponent'|'Artifact'|'Context'|'Action' $LineageType
 */
class Vertex extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Type?: string,
     *     LineageType?: 'TrialComponent'|'Artifact'|'Context'|'Action'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
