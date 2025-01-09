<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowAdminCreateUserOnly
 * @property int $UnusedAccountValidityDays
 * @property MessageTemplateType $InviteMessageTemplate
 */
class AdminCreateUserConfigType extends Shape
{
    /**
     * @param array{
     *     AllowAdminCreateUserOnly?: bool,
     *     UnusedAccountValidityDays?: int,
     *     InviteMessageTemplate?: MessageTemplateType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
