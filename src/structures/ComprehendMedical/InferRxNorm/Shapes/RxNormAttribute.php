<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferRxNorm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOSAGE'|'DURATION'|'FORM'|'FREQUENCY'|'RATE'|'ROUTE_OR_MODE'|'STRENGTH' $Type
 * @property float $Score
 * @property float $RelationshipScore
 * @property int $Id
 * @property int $BeginOffset
 * @property int $EndOffset
 * @property string $Text
 * @property list<RxNormTrait> $Traits
 */
class RxNormAttribute extends Shape
{
    /**
     * @param array{
     *     Type?: 'DOSAGE'|'DURATION'|'FORM'|'FREQUENCY'|'RATE'|'ROUTE_OR_MODE'|'STRENGTH',
     *     Score?: float,
     *     RelationshipScore?: float,
     *     Id?: int,
     *     BeginOffset?: int,
     *     EndOffset?: int,
     *     Text?: string,
     *     Traits?: list<RxNormTrait>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
