<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DetectEntitiesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Id
 * @property int $BeginOffset
 * @property int $EndOffset
 * @property float $Score
 * @property string $Text
 * @property 'MEDICATION'|'MEDICAL_CONDITION'|'PROTECTED_HEALTH_INFORMATION'|'TEST_TREATMENT_PROCEDURE'|'ANATOMY'|'TIME_EXPRESSION'|'BEHAVIORAL_ENVIRONMENTAL_SOCIAL' $Category
 * @property 'NAME'|'DX_NAME'|'DOSAGE'|'ROUTE_OR_MODE'|'FORM'|'FREQUENCY'|'DURATION'|'GENERIC_NAME'|'BRAND_NAME'|'STRENGTH'|'RATE'|'ACUITY'|'TEST_NAME'|'TEST_VALUE'|'TEST_UNITS'|'TEST_UNIT'|'PROCEDURE_NAME'|'TREATMENT_NAME'|'DATE'|'AGE'|'CONTACT_POINT'|'PHONE_OR_FAX'|'EMAIL'|'IDENTIFIER'|'ID'|'URL'|'ADDRESS'|'PROFESSION'|'SYSTEM_ORGAN_SITE'|'DIRECTION'|'QUALITY'|'QUANTITY'|'TIME_EXPRESSION'|'TIME_TO_MEDICATION_NAME'|'TIME_TO_DX_NAME'|'TIME_TO_TEST_NAME'|'TIME_TO_PROCEDURE_NAME'|'TIME_TO_TREATMENT_NAME'|'AMOUNT'|'GENDER'|'RACE_ETHNICITY'|'ALLERGIES'|'TOBACCO_USE'|'ALCOHOL_CONSUMPTION'|'REC_DRUG_USE' $Type
 * @property list<TraitShape> $Traits
 * @property list<Attribute> $Attributes
 */
class Entity extends Shape
{
    /**
     * @param array{
     *     Id?: int,
     *     BeginOffset?: int,
     *     EndOffset?: int,
     *     Score?: float,
     *     Text?: string,
     *     Category?: 'MEDICATION'|'MEDICAL_CONDITION'|'PROTECTED_HEALTH_INFORMATION'|'TEST_TREATMENT_PROCEDURE'|'ANATOMY'|'TIME_EXPRESSION'|'BEHAVIORAL_ENVIRONMENTAL_SOCIAL',
     *     Type?: 'NAME'|'DX_NAME'|'DOSAGE'|'ROUTE_OR_MODE'|'FORM'|'FREQUENCY'|'DURATION'|'GENERIC_NAME'|'BRAND_NAME'|'STRENGTH'|'RATE'|'ACUITY'|'TEST_NAME'|'TEST_VALUE'|'TEST_UNITS'|'TEST_UNIT'|'PROCEDURE_NAME'|'TREATMENT_NAME'|'DATE'|'AGE'|'CONTACT_POINT'|'PHONE_OR_FAX'|'EMAIL'|'IDENTIFIER'|'ID'|'URL'|'ADDRESS'|'PROFESSION'|'SYSTEM_ORGAN_SITE'|'DIRECTION'|'QUALITY'|'QUANTITY'|'TIME_EXPRESSION'|'TIME_TO_MEDICATION_NAME'|'TIME_TO_DX_NAME'|'TIME_TO_TEST_NAME'|'TIME_TO_PROCEDURE_NAME'|'TIME_TO_TREATMENT_NAME'|'AMOUNT'|'GENDER'|'RACE_ETHNICITY'|'ALLERGIES'|'TOBACCO_USE'|'ALCOHOL_CONSUMPTION'|'REC_DRUG_USE',
     *     Traits?: list<TraitShape>,
     *     Attributes?: list<Attribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
