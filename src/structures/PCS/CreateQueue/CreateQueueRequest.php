<?php

namespace Sunaoka\Aws\Structures\PCS\CreateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $queueName
 * @property list<Shapes\ComputeNodeGroupConfiguration> $computeNodeGroupConfigurations
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateQueueRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     queueName: string,
     *     computeNodeGroupConfigurations?: list<Shapes\ComputeNodeGroupConfiguration>,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
