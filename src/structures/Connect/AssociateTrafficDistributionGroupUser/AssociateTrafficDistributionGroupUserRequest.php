<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateTrafficDistributionGroupUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficDistributionGroupId
 * @property string $UserId
 * @property string $InstanceId
 */
class AssociateTrafficDistributionGroupUserRequest extends Request
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
