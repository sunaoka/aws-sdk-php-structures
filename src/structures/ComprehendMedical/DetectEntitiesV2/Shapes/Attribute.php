<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DetectEntitiesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NAME'|'DX_NAME'|'DOSAGE'|'ROUTE_OR_MODE'|'FORM'|'FREQUENCY'|'DURATION'|'GENERIC_NAME'|'BRAND_NAME'|'STRENGTH'|'RATE'|'ACUITY'|'TEST_NAME'|'TEST_VALUE'|'TEST_UNITS'|'TEST_UNIT'|'PROCEDURE_NAME'|'TREATMENT_NAME'|'DATE'|'AGE'|'CONTACT_POINT'|'PHONE_OR_FAX'|'EMAIL'|'IDENTIFIER'|'ID'|'URL'|'ADDRESS'|'PROFESSION'|'SYSTEM_ORGAN_SITE'|'DIRECTION'|'QUALITY'|'QUANTITY'|'TIME_EXPRESSION'|'TIME_TO_MEDICATION_NAME'|'TIME_TO_DX_NAME'|'TIME_TO_TEST_NAME'|'TIME_TO_PROCEDURE_NAME'|'TIME_TO_TREATMENT_NAME'|'AMOUNT'|'GENDER'|'RACE_ETHNICITY'|'ALLERGIES'|'TOBACCO_USE'|'ALCOHOL_CONSUMPTION'|'REC_DRUG_USE' $Type
 * @property float $Score
 * @property float $RelationshipScore
 * @property 'EVERY'|'WITH_DOSAGE'|'ADMINISTERED_VIA'|'FOR'|'NEGATIVE'|'OVERLAP'|'DOSAGE'|'ROUTE_OR_MODE'|'FORM'|'FREQUENCY'|'DURATION'|'STRENGTH'|'RATE'|'ACUITY'|'TEST_VALUE'|'TEST_UNITS'|'TEST_UNIT'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'AMOUNT'|'USAGE'|'QUALITY' $RelationshipType
 * @property int $Id
 * @property int $BeginOffset
 * @property int $EndOffset
 * @property string $Text
 * @property 'MEDICATION'|'MEDICAL_CONDITION'|'PROTECTED_HEALTH_INFORMATION'|'TEST_TREATMENT_PROCEDURE'|'ANATOMY'|'TIME_EXPRESSION'|'BEHAVIORAL_ENVIRONMENTAL_SOCIAL' $Category
 * @property list<TraitShape> $Traits
 */
class Attribute extends Shape
{
    /**
     * @param array{
     *     Type?: 'NAME'|'DX_NAME'|'DOSAGE'|'ROUTE_OR_MODE'|'FORM'|'FREQUENCY'|'DURATION'|'GENERIC_NAME'|'BRAND_NAME'|'STRENGTH'|'RATE'|'ACUITY'|'TEST_NAME'|'TEST_VALUE'|'TEST_UNITS'|'TEST_UNIT'|'PROCEDURE_NAME'|'TREATMENT_NAME'|'DATE'|'AGE'|'CONTACT_POINT'|'PHONE_OR_FAX'|'EMAIL'|'IDENTIFIER'|'ID'|'URL'|'ADDRESS'|'PROFESSION'|'SYSTEM_ORGAN_SITE'|'DIRECTION'|'QUALITY'|'QUANTITY'|'TIME_EXPRESSION'|'TIME_TO_MEDICATION_NAME'|'TIME_TO_DX_NAME'|'TIME_TO_TEST_NAME'|'TIME_TO_PROCEDURE_NAME'|'TIME_TO_TREATMENT_NAME'|'AMOUNT'|'GENDER'|'RACE_ETHNICITY'|'ALLERGIES'|'TOBACCO_USE'|'ALCOHOL_CONSUMPTION'|'REC_DRUG_USE',
     *     Score?: float,
     *     RelationshipScore?: float,
     *     RelationshipType?: 'EVERY'|'WITH_DOSAGE'|'ADMINISTERED_VIA'|'FOR'|'NEGATIVE'|'OVERLAP'|'DOSAGE'|'ROUTE_OR_MODE'|'FORM'|'FREQUENCY'|'DURATION'|'STRENGTH'|'RATE'|'ACUITY'|'TEST_VALUE'|'TEST_UNITS'|'TEST_UNIT'|'DIRECTION'|'SYSTEM_ORGAN_SITE'|'AMOUNT'|'USAGE'|'QUALITY',
     *     Id?: int,
     *     BeginOffset?: int,
     *     EndOffset?: int,
     *     Text?: string,
     *     Category?: 'MEDICATION'|'MEDICAL_CONDITION'|'PROTECTED_HEALTH_INFORMATION'|'TEST_TREATMENT_PROCEDURE'|'ANATOMY'|'TIME_EXPRESSION'|'BEHAVIORAL_ENVIRONMENTAL_SOCIAL',
     *     Traits?: list<TraitShape>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
