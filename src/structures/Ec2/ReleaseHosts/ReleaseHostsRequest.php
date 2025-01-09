<?php

namespace Sunaoka\Aws\Structures\Ec2\ReleaseHosts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $HostIds
 */
class ReleaseHostsRequest extends Request
{
    /**
     * @param array{HostIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
