<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NodeId
 * @property string $OwnerAccount
 */
class DescribeNodeRequest extends Request
{
    /**
     * @param array{
     *     NodeId: string,
     *     OwnerAccount?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
