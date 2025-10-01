<?php

namespace Sunaoka\Aws\Structures\PCS\CreateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $queueName
 * @property list<Shapes\ComputeNodeGroupConfiguration>|null $computeNodeGroupConfigurations
 * @property Shapes\QueueSlurmConfigurationRequest|null $slurmConfiguration
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateQueueRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     queueName: string,
     *     computeNodeGroupConfigurations?: list<Shapes\ComputeNodeGroupConfiguration>|null,
     *     slurmConfiguration?: Shapes\QueueSlurmConfigurationRequest|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
