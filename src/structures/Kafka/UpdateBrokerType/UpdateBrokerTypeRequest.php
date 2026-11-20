<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateBrokerType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $CurrentVersion
 * @property string $TargetInstanceType
 * @property 'AUTO'|'MANUAL'|null $TopicReassignment
 */
class UpdateBrokerTypeRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     CurrentVersion: string,
     *     TargetInstanceType: string,
     *     TopicReassignment?: 'AUTO'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
