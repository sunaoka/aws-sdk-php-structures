<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 */
class DescribeNetworkRequest extends Request
{
    /**
     * @param array{NetworkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
