<?php

namespace Sunaoka\Aws\Structures\Connect\GetCrossRegionRouting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 */
class GetCrossRegionRoutingRequest extends Request
{
    /**
     * @param array{InstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
