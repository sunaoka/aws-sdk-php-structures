<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferSNOMEDCT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Id
 * @property string $Text
 * @property 'MEDICAL_CONDITION'|'ANATOMY'|'TEST_TREATMENT_PROCEDURE' $Category
 * @property 'DX_NAME'|'TEST_NAME'|'PROCEDURE_NAME'|'TREATMENT_NAME' $Type
 * @property float $Score
 * @property int $BeginOffset
 * @property int $EndOffset
 * @property list<SNOMEDCTAttribute> $Attributes
 * @property list<SNOMEDCTTrait> $Traits
 * @property list<SNOMEDCTConcept> $SNOMEDCTConcepts
 */
class SNOMEDCTEntity extends Shape
{
    /**
     * @param array{
     *     Id?: int,
     *     Text?: string,
     *     Category?: 'MEDICAL_CONDITION'|'ANATOMY'|'TEST_TREATMENT_PROCEDURE',
     *     Type?: 'DX_NAME'|'TEST_NAME'|'PROCEDURE_NAME'|'TREATMENT_NAME',
     *     Score?: float,
     *     BeginOffset?: int,
     *     EndOffset?: int,
     *     Attributes?: list<SNOMEDCTAttribute>,
     *     Traits?: list<SNOMEDCTTrait>,
     *     SNOMEDCTConcepts?: list<SNOMEDCTConcept>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
