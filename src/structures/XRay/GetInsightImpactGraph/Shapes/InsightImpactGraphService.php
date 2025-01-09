<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightImpactGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReferenceId
 * @property string $Type
 * @property string $Name
 * @property list<string> $Names
 * @property string $AccountId
 * @property list<InsightImpactGraphEdge> $Edges
 */
class InsightImpactGraphService extends Shape
{
    /**
     * @param array{
     *     ReferenceId?: int,
     *     Type?: string,
     *     Name?: string,
     *     Names?: list<string>,
     *     AccountId?: string,
     *     Edges?: list<InsightImpactGraphEdge>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
