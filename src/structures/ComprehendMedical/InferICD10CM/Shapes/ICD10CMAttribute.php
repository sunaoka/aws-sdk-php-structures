<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferICD10CM\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACUITY'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'QUALITY'|'QUANTITY'|'TIME_TO_DX_NAME'|'TIME_EXPRESSION' $Type
 * @property float $Score
 * @property float $RelationshipScore
 * @property int $Id
 * @property int $BeginOffset
 * @property int $EndOffset
 * @property string $Text
 * @property list<ICD10CMTrait> $Traits
 * @property 'DX_NAME'|'TIME_EXPRESSION' $Category
 * @property 'OVERLAP'|'SYSTEM_ORGAN_SITE'|'QUALITY' $RelationshipType
 */
class ICD10CMAttribute extends Shape
{
    /**
     * @param array{
     *     Type?: 'ACUITY'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'QUALITY'|'QUANTITY'|'TIME_TO_DX_NAME'|'TIME_EXPRESSION',
     *     Score?: float,
     *     RelationshipScore?: float,
     *     Id?: int,
     *     BeginOffset?: int,
     *     EndOffset?: int,
     *     Text?: string,
     *     Traits?: list<ICD10CMTrait>,
     *     Category?: 'DX_NAME'|'TIME_EXPRESSION',
     *     RelationshipType?: 'OVERLAP'|'SYSTEM_ORGAN_SITE'|'QUALITY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
