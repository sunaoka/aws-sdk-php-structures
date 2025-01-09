<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateTrafficDistributionGroupUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficDistributionGroupId
 * @property string $UserId
 * @property string $InstanceId
 */
class DisassociateTrafficDistributionGroupUserRequest extends Request
{
    /**
     * @param array{
     *     TrafficDistributionGroupId: string,
     *     UserId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
