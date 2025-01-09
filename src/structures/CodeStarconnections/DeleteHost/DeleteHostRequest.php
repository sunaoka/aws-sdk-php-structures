<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\DeleteHost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostArn
 */
class DeleteHostRequest extends Request
{
    /**
     * @param array{HostArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
