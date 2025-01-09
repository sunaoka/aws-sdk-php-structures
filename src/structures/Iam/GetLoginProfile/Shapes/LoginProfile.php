<?php

namespace Sunaoka\Aws\Structures\Iam\GetLoginProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property bool $PasswordResetRequired
 */
class LoginProfile extends Shape
{
    /**
     * @param array{
     *     UserName: string,
     *     CreateDate: \Aws\Api\DateTimeResult,
     *     PasswordResetRequired?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
