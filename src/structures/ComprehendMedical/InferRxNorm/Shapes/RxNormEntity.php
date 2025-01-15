<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferRxNorm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Id
 * @property string|null $Text
 * @property 'MEDICATION'|null $Category
 * @property 'BRAND_NAME'|'GENERIC_NAME'|null $Type
 * @property float|null $Score
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 * @property list<RxNormAttribute>|null $Attributes
 * @property list<RxNormTrait>|null $Traits
 * @property list<RxNormConcept>|null $RxNormConcepts
 */
class RxNormEntity extends Shape
{
    /**
     * @param array{
     *     Id?: int|null,
     *     Text?: string|null,
     *     Category?: 'MEDICATION'|null,
     *     Type?: 'BRAND_NAME'|'GENERIC_NAME'|null,
     *     Score?: float|null,
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null,
     *     Attributes?: list<RxNormAttribute>|null,
     *     Traits?: list<RxNormTrait>|null,
     *     RxNormConcepts?: list<RxNormConcept>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
