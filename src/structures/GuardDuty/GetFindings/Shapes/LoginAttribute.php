<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $User
 * @property string $Application
 * @property int $FailedLoginAttempts
 * @property int $SuccessfulLoginAttempts
 */
class LoginAttribute extends Shape
{
    /**
     * @param array{
     *     User?: string,
     *     Application?: string,
     *     FailedLoginAttempts?: int,
     *     SuccessfulLoginAttempts?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
