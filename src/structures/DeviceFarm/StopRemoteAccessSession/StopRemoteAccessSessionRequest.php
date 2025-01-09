<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopRemoteAccessSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class StopRemoteAccessSessionRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
