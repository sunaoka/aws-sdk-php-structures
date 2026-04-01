<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemon;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $daemonArn
 */
class DescribeDaemonRequest extends Request
{
    /**
     * @param array{daemonArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
