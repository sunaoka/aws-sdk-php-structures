<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowAdminCreateUserOnly
 * @property int<0, 365> $UnusedAccountValidityDays
 * @property MessageTemplateType $InviteMessageTemplate
 */
class AdminCreateUserConfigType extends Shape
{
    /**
     * @param array{
     *     AllowAdminCreateUserOnly?: bool,
     *     UnusedAccountValidityDays?: int<0, 365>,
     *     InviteMessageTemplate?: MessageTemplateType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
