<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $NodeId
 */
class DescribeNodeRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     NodeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
