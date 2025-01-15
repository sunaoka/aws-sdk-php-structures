<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowAdminCreateUserOnly
 * @property int<0, 365>|null $UnusedAccountValidityDays
 * @property MessageTemplateType|null $InviteMessageTemplate
 */
class AdminCreateUserConfigType extends Shape
{
    /**
     * @param array{
     *     AllowAdminCreateUserOnly?: bool|null,
     *     UnusedAccountValidityDays?: int<0, 365>|null,
     *     InviteMessageTemplate?: MessageTemplateType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
