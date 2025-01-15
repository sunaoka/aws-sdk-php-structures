<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferICD10CM\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACUITY'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'QUALITY'|'QUANTITY'|'TIME_TO_DX_NAME'|'TIME_EXPRESSION'|null $Type
 * @property float|null $Score
 * @property float|null $RelationshipScore
 * @property int|null $Id
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 * @property string|null $Text
 * @property list<ICD10CMTrait>|null $Traits
 * @property 'DX_NAME'|'TIME_EXPRESSION'|null $Category
 * @property 'OVERLAP'|'SYSTEM_ORGAN_SITE'|'QUALITY'|null $RelationshipType
 */
class ICD10CMAttribute extends Shape
{
    /**
     * @param array{
     *     Type?: 'ACUITY'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'QUALITY'|'QUANTITY'|'TIME_TO_DX_NAME'|'TIME_EXPRESSION'|null,
     *     Score?: float|null,
     *     RelationshipScore?: float|null,
     *     Id?: int|null,
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null,
     *     Text?: string|null,
     *     Traits?: list<ICD10CMTrait>|null,
     *     Category?: 'DX_NAME'|'TIME_EXPRESSION'|null,
     *     RelationshipType?: 'OVERLAP'|'SYSTEM_ORGAN_SITE'|'QUALITY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
