<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferRxNorm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Id
 * @property string $Text
 * @property 'MEDICATION' $Category
 * @property 'BRAND_NAME'|'GENERIC_NAME' $Type
 * @property float $Score
 * @property int $BeginOffset
 * @property int $EndOffset
 * @property list<RxNormAttribute> $Attributes
 * @property list<RxNormTrait> $Traits
 * @property list<RxNormConcept> $RxNormConcepts
 */
class RxNormEntity extends Shape
{
    /**
     * @param array{
     *     Id?: int,
     *     Text?: string,
     *     Category?: 'MEDICATION',
     *     Type?: 'BRAND_NAME'|'GENERIC_NAME',
     *     Score?: float,
     *     BeginOffset?: int,
     *     EndOffset?: int,
     *     Attributes?: list<RxNormAttribute>,
     *     Traits?: list<RxNormTrait>,
     *     RxNormConcepts?: list<RxNormConcept>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
