<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferICD10CM\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Id
 * @property string $Text
 * @property 'MEDICAL_CONDITION' $Category
 * @property 'DX_NAME'|'TIME_EXPRESSION' $Type
 * @property float $Score
 * @property int $BeginOffset
 * @property int $EndOffset
 * @property list<ICD10CMAttribute> $Attributes
 * @property list<ICD10CMTrait> $Traits
 * @property list<ICD10CMConcept> $ICD10CMConcepts
 */
class ICD10CMEntity extends Shape
{
    /**
     * @param array{
     *     Id?: int,
     *     Text?: string,
     *     Category?: 'MEDICAL_CONDITION',
     *     Type?: 'DX_NAME'|'TIME_EXPRESSION',
     *     Score?: float,
     *     BeginOffset?: int,
     *     EndOffset?: int,
     *     Attributes?: list<ICD10CMAttribute>,
     *     Traits?: list<ICD10CMTrait>,
     *     ICD10CMConcepts?: list<ICD10CMConcept>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
