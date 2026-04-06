<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeDiscoveryJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscoveryJobArn
 */
class DescribeDiscoveryJobRequest extends Request
{
    /**
     * @param array{DiscoveryJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
