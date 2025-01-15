<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NodeId
 * @property string|null $OwnerAccount
 */
class DescribeNodeRequest extends Request
{
    /**
     * @param array{
     *     NodeId: string,
     *     OwnerAccount?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
