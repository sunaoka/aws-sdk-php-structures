<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ResetUserPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userId
 * @property string $clientToken
 */
class ResetUserPasswordRequest extends Request
{
    /**
     * @param array{
     *     userId: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
