<?php

namespace Sunaoka\Aws\Structures\Iam\CreateLoginProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property bool|null $PasswordResetRequired
 */
class LoginProfile extends Shape
{
    /**
     * @param array{
     *     UserName: string,
     *     CreateDate: \Aws\Api\DateTimeResult,
     *     PasswordResetRequired?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
