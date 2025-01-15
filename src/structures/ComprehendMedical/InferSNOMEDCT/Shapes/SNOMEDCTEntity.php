<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferSNOMEDCT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Id
 * @property string|null $Text
 * @property 'MEDICAL_CONDITION'|'ANATOMY'|'TEST_TREATMENT_PROCEDURE'|null $Category
 * @property 'DX_NAME'|'TEST_NAME'|'PROCEDURE_NAME'|'TREATMENT_NAME'|null $Type
 * @property float|null $Score
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 * @property list<SNOMEDCTAttribute>|null $Attributes
 * @property list<SNOMEDCTTrait>|null $Traits
 * @property list<SNOMEDCTConcept>|null $SNOMEDCTConcepts
 */
class SNOMEDCTEntity extends Shape
{
    /**
     * @param array{
     *     Id?: int|null,
     *     Text?: string|null,
     *     Category?: 'MEDICAL_CONDITION'|'ANATOMY'|'TEST_TREATMENT_PROCEDURE'|null,
     *     Type?: 'DX_NAME'|'TEST_NAME'|'PROCEDURE_NAME'|'TREATMENT_NAME'|null,
     *     Score?: float|null,
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null,
     *     Attributes?: list<SNOMEDCTAttribute>|null,
     *     Traits?: list<SNOMEDCTTrait>|null,
     *     SNOMEDCTConcepts?: list<SNOMEDCTConcept>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
