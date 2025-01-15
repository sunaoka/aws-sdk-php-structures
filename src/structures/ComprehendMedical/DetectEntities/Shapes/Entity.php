<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Id
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 * @property float|null $Score
 * @property string|null $Text
 * @property 'MEDICATION'|'MEDICAL_CONDITION'|'PROTECTED_HEALTH_INFORMATION'|'TEST_TREATMENT_PROCEDURE'|'ANATOMY'|'TIME_EXPRESSION'|'BEHAVIORAL_ENVIRONMENTAL_SOCIAL'|null $Category
 * @property 'NAME'|'DX_NAME'|'DOSAGE'|'ROUTE_OR_MODE'|'FORM'|'FREQUENCY'|'DURATION'|'GENERIC_NAME'|'BRAND_NAME'|'STRENGTH'|'RATE'|'ACUITY'|'TEST_NAME'|'TEST_VALUE'|'TEST_UNITS'|'TEST_UNIT'|'PROCEDURE_NAME'|'TREATMENT_NAME'|'DATE'|'AGE'|'CONTACT_POINT'|'PHONE_OR_FAX'|'EMAIL'|'IDENTIFIER'|'ID'|'URL'|'ADDRESS'|'PROFESSION'|'SYSTEM_ORGAN_SITE'|'DIRECTION'|'QUALITY'|'QUANTITY'|'TIME_EXPRESSION'|'TIME_TO_MEDICATION_NAME'|'TIME_TO_DX_NAME'|'TIME_TO_TEST_NAME'|'TIME_TO_PROCEDURE_NAME'|'TIME_TO_TREATMENT_NAME'|'AMOUNT'|'GENDER'|'RACE_ETHNICITY'|'ALLERGIES'|'TOBACCO_USE'|'ALCOHOL_CONSUMPTION'|'REC_DRUG_USE'|null $Type
 * @property list<TraitShape>|null $Traits
 * @property list<Attribute>|null $Attributes
 */
class Entity extends Shape
{
    /**
     * @param array{
     *     Id?: int|null,
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null,
     *     Score?: float|null,
     *     Text?: string|null,
     *     Category?: 'MEDICATION'|'MEDICAL_CONDITION'|'PROTECTED_HEALTH_INFORMATION'|'TEST_TREATMENT_PROCEDURE'|'ANATOMY'|'TIME_EXPRESSION'|'BEHAVIORAL_ENVIRONMENTAL_SOCIAL'|null,
     *     Type?: 'NAME'|'DX_NAME'|'DOSAGE'|'ROUTE_OR_MODE'|'FORM'|'FREQUENCY'|'DURATION'|'GENERIC_NAME'|'BRAND_NAME'|'STRENGTH'|'RATE'|'ACUITY'|'TEST_NAME'|'TEST_VALUE'|'TEST_UNITS'|'TEST_UNIT'|'PROCEDURE_NAME'|'TREATMENT_NAME'|'DATE'|'AGE'|'CONTACT_POINT'|'PHONE_OR_FAX'|'EMAIL'|'IDENTIFIER'|'ID'|'URL'|'ADDRESS'|'PROFESSION'|'SYSTEM_ORGAN_SITE'|'DIRECTION'|'QUALITY'|'QUANTITY'|'TIME_EXPRESSION'|'TIME_TO_MEDICATION_NAME'|'TIME_TO_DX_NAME'|'TIME_TO_TEST_NAME'|'TIME_TO_PROCEDURE_NAME'|'TIME_TO_TREATMENT_NAME'|'AMOUNT'|'GENDER'|'RACE_ETHNICITY'|'ALLERGIES'|'TOBACCO_USE'|'ALCOHOL_CONSUMPTION'|'REC_DRUG_USE'|null,
     *     Traits?: list<TraitShape>|null,
     *     Attributes?: list<Attribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
