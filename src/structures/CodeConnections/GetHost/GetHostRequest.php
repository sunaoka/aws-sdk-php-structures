<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetHost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostArn
 */
class GetHostRequest extends Request
{
    /**
     * @param array{HostArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
