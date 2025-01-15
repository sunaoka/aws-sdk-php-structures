<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSON'|'FORM_ENCODED' $PayloadType
 * @property UsernameField|null $UsernameField
 * @property PasswordField|null $PasswordField
 * @property EmailField|null $EmailField
 * @property list<PhoneNumberField>|null $PhoneNumberFields
 * @property list<AddressField>|null $AddressFields
 */
class RequestInspectionACFP extends Shape
{
    /**
     * @param array{
     *     PayloadType: 'JSON'|'FORM_ENCODED',
     *     UsernameField?: UsernameField|null,
     *     PasswordField?: PasswordField|null,
     *     EmailField?: EmailField|null,
     *     PhoneNumberFields?: list<PhoneNumberField>|null,
     *     AddressFields?: list<AddressField>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
