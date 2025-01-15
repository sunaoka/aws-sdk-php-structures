<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferSNOMEDCT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MEDICAL_CONDITION'|'ANATOMY'|'TEST_TREATMENT_PROCEDURE'|null $Category
 * @property 'ACUITY'|'QUALITY'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'TEST_VALUE'|'TEST_UNIT'|null $Type
 * @property float|null $Score
 * @property float|null $RelationshipScore
 * @property 'ACUITY'|'QUALITY'|'TEST_VALUE'|'TEST_UNITS'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'TEST_UNIT'|null $RelationshipType
 * @property int|null $Id
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 * @property string|null $Text
 * @property list<SNOMEDCTTrait>|null $Traits
 * @property list<SNOMEDCTConcept>|null $SNOMEDCTConcepts
 */
class SNOMEDCTAttribute extends Shape
{
    /**
     * @param array{
     *     Category?: 'MEDICAL_CONDITION'|'ANATOMY'|'TEST_TREATMENT_PROCEDURE'|null,
     *     Type?: 'ACUITY'|'QUALITY'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'TEST_VALUE'|'TEST_UNIT'|null,
     *     Score?: float|null,
     *     RelationshipScore?: float|null,
     *     RelationshipType?: 'ACUITY'|'QUALITY'|'TEST_VALUE'|'TEST_UNITS'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'TEST_UNIT'|null,
     *     Id?: int|null,
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null,
     *     Text?: string|null,
     *     Traits?: list<SNOMEDCTTrait>|null,
     *     SNOMEDCTConcepts?: list<SNOMEDCTConcept>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
