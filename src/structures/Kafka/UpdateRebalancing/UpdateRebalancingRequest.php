<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateRebalancing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $CurrentVersion
 * @property Shapes\Rebalancing $Rebalancing
 */
class UpdateRebalancingRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     CurrentVersion: string,
     *     Rebalancing: Shapes\Rebalancing
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
