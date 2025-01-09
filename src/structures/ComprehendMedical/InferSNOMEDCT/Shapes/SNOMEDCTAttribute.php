<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferSNOMEDCT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MEDICAL_CONDITION'|'ANATOMY'|'TEST_TREATMENT_PROCEDURE' $Category
 * @property 'ACUITY'|'QUALITY'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'TEST_VALUE'|'TEST_UNIT' $Type
 * @property float $Score
 * @property float $RelationshipScore
 * @property 'ACUITY'|'QUALITY'|'TEST_VALUE'|'TEST_UNITS'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'TEST_UNIT' $RelationshipType
 * @property int $Id
 * @property int $BeginOffset
 * @property int $EndOffset
 * @property string $Text
 * @property list<SNOMEDCTTrait> $Traits
 * @property list<SNOMEDCTConcept> $SNOMEDCTConcepts
 */
class SNOMEDCTAttribute extends Shape
{
    /**
     * @param array{
     *     Category?: 'MEDICAL_CONDITION'|'ANATOMY'|'TEST_TREATMENT_PROCEDURE',
     *     Type?: 'ACUITY'|'QUALITY'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'TEST_VALUE'|'TEST_UNIT',
     *     Score?: float,
     *     RelationshipScore?: float,
     *     RelationshipType?: 'ACUITY'|'QUALITY'|'TEST_VALUE'|'TEST_UNITS'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'TEST_UNIT',
     *     Id?: int,
     *     BeginOffset?: int,
     *     EndOffset?: int,
     *     Text?: string,
     *     Traits?: list<SNOMEDCTTrait>,
     *     SNOMEDCTConcepts?: list<SNOMEDCTConcept>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
