<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferICD10CM\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Id
 * @property string|null $Text
 * @property 'MEDICAL_CONDITION'|null $Category
 * @property 'DX_NAME'|'TIME_EXPRESSION'|null $Type
 * @property float|null $Score
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 * @property list<ICD10CMAttribute>|null $Attributes
 * @property list<ICD10CMTrait>|null $Traits
 * @property list<ICD10CMConcept>|null $ICD10CMConcepts
 */
class ICD10CMEntity extends Shape
{
    /**
     * @param array{
     *     Id?: int|null,
     *     Text?: string|null,
     *     Category?: 'MEDICAL_CONDITION'|null,
     *     Type?: 'DX_NAME'|'TIME_EXPRESSION'|null,
     *     Score?: float|null,
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null,
     *     Attributes?: list<ICD10CMAttribute>|null,
     *     Traits?: list<ICD10CMTrait>|null,
     *     ICD10CMConcepts?: list<ICD10CMConcept>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
