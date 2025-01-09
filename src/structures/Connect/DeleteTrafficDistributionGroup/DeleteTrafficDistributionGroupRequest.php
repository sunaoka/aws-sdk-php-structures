<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteTrafficDistributionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficDistributionGroupId
 */
class DeleteTrafficDistributionGroupRequest extends Request
{
    /**
     * @param array{TrafficDistributionGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
