<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightImpactGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ReferenceId
 * @property string|null $Type
 * @property string|null $Name
 * @property list<string>|null $Names
 * @property string|null $AccountId
 * @property list<InsightImpactGraphEdge>|null $Edges
 */
class InsightImpactGraphService extends Shape
{
    /**
     * @param array{
     *     ReferenceId?: int|null,
     *     Type?: string|null,
     *     Name?: string|null,
     *     Names?: list<string>|null,
     *     AccountId?: string|null,
     *     Edges?: list<InsightImpactGraphEdge>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
