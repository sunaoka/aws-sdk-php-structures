<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $queueIdentifier
 * @property list<Shapes\ComputeNodeGroupConfiguration>|null $computeNodeGroupConfigurations
 * @property string|null $clientToken
 */
class UpdateQueueRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     queueIdentifier: string,
     *     computeNodeGroupConfigurations?: list<Shapes\ComputeNodeGroupConfiguration>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
