<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $User
 * @property string|null $Application
 * @property int|null $FailedLoginAttempts
 * @property int|null $SuccessfulLoginAttempts
 */
class LoginAttribute extends Shape
{
    /**
     * @param array{
     *     User?: string|null,
     *     Application?: string|null,
     *     FailedLoginAttempts?: int|null,
     *     SuccessfulLoginAttempts?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
