<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateBrokerType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $CurrentVersion
 * @property string $TargetInstanceType
 */
class UpdateBrokerTypeRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     CurrentVersion: string,
     *     TargetInstanceType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
