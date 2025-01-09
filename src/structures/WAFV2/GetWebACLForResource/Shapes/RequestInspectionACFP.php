<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSON'|'FORM_ENCODED' $PayloadType
 * @property UsernameField $UsernameField
 * @property PasswordField $PasswordField
 * @property EmailField $EmailField
 * @property list<PhoneNumberField> $PhoneNumberFields
 * @property list<AddressField> $AddressFields
 */
class RequestInspectionACFP extends Shape
{
    /**
     * @param array{
     *     PayloadType: 'JSON'|'FORM_ENCODED',
     *     UsernameField?: UsernameField,
     *     PasswordField?: PasswordField,
     *     EmailField?: EmailField,
     *     PhoneNumberFields?: list<PhoneNumberField>,
     *     AddressFields?: list<AddressField>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
