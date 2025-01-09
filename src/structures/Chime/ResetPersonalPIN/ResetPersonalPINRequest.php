<?php

namespace Sunaoka\Aws\Structures\Chime\ResetPersonalPIN;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $UserId
 */
class ResetPersonalPINRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     UserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
