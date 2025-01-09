<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSON'|'FORM_ENCODED' $PayloadType
 * @property UsernameField $UsernameField
 * @property PasswordField $PasswordField
 */
class RequestInspection extends Shape
{
    /**
     * @param array{
     *     PayloadType: 'JSON'|'FORM_ENCODED',
     *     UsernameField: UsernameField,
     *     PasswordField: PasswordField
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
