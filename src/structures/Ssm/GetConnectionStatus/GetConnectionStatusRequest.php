<?php

namespace Sunaoka\Aws\Structures\Ssm\GetConnectionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Target
 */
class GetConnectionStatusRequest extends Request
{
    /**
     * @param array{Target: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
