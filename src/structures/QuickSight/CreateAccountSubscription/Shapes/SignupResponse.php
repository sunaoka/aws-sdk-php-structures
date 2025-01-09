<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccountSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IAMUser
 * @property string $userLoginName
 * @property string $accountName
 * @property string $directoryType
 */
class SignupResponse extends Shape
{
    /**
     * @param array{
     *     IAMUser?: bool,
     *     userLoginName?: string,
     *     accountName?: string,
     *     directoryType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
