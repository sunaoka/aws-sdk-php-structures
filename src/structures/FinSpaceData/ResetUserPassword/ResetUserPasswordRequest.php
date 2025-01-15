<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ResetUserPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userId
 * @property string|null $clientToken
 */
class ResetUserPasswordRequest extends Request
{
    /**
     * @param array{
     *     userId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
