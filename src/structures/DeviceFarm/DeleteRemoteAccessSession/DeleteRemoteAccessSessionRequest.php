<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteRemoteAccessSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteRemoteAccessSessionRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
