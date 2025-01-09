<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateBrokerCount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $CurrentVersion
 * @property int<1, 15> $TargetNumberOfBrokerNodes
 */
class UpdateBrokerCountRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     CurrentVersion: string,
     *     TargetNumberOfBrokerNodes: int<1, 15>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
