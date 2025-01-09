<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetRemoteAccessSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetRemoteAccessSessionRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
