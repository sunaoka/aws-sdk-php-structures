<?php

namespace Sunaoka\Aws\Structures\Kafka\GetBootstrapBrokers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 */
class GetBootstrapBrokersRequest extends Request
{
    /**
     * @param array{ClusterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
