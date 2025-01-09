<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SectionPath
 * @property string $FieldPath
 * @property 'SELECT'|'TEXT'|'ATTACHMENT' $FieldType
 * @property 'REQUIRED'|'CONDITIONAL'|'OPTIONAL' $FieldRequirement
 * @property SelectValidation $SelectValidation
 * @property TextValidation $TextValidation
 * @property RegistrationFieldDisplayHints $DisplayHints
 */
class RegistrationFieldDefinition extends Shape
{
    /**
     * @param array{
     *     SectionPath: string,
     *     FieldPath: string,
     *     FieldType: 'SELECT'|'TEXT'|'ATTACHMENT',
     *     FieldRequirement: 'REQUIRED'|'CONDITIONAL'|'OPTIONAL',
     *     SelectValidation?: SelectValidation,
     *     TextValidation?: TextValidation,
     *     DisplayHints: RegistrationFieldDisplayHints
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
