<?php

namespace Sunaoka\Aws\Structures\Kafka\RebootBroker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $BrokerIds
 * @property string $ClusterArn
 */
class RebootBrokerRequest extends Request
{
    /**
     * @param array{
     *     BrokerIds: list<string>,
     *     ClusterArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
