<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferRxNorm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOSAGE'|'DURATION'|'FORM'|'FREQUENCY'|'RATE'|'ROUTE_OR_MODE'|'STRENGTH'|null $Type
 * @property float|null $Score
 * @property float|null $RelationshipScore
 * @property int|null $Id
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 * @property string|null $Text
 * @property list<RxNormTrait>|null $Traits
 */
class RxNormAttribute extends Shape
{
    /**
     * @param array{
     *     Type?: 'DOSAGE'|'DURATION'|'FORM'|'FREQUENCY'|'RATE'|'ROUTE_OR_MODE'|'STRENGTH'|null,
     *     Score?: float|null,
     *     RelationshipScore?: float|null,
     *     Id?: int|null,
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null,
     *     Text?: string|null,
     *     Traits?: list<RxNormTrait>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
