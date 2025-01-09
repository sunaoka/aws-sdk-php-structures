<?php

namespace Sunaoka\Aws\Structures\DataSync\StopDiscoveryJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscoveryJobArn
 */
class StopDiscoveryJobRequest extends Request
{
    /**
     * @param array{DiscoveryJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
