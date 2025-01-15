<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccountSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IAMUser
 * @property string|null $userLoginName
 * @property string|null $accountName
 * @property string|null $directoryType
 */
class SignupResponse extends Shape
{
    /**
     * @param array{
     *     IAMUser?: bool|null,
     *     userLoginName?: string|null,
     *     accountName?: string|null,
     *     directoryType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
