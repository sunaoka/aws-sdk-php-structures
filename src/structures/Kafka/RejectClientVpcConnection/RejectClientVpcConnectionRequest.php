<?php

namespace Sunaoka\Aws\Structures\Kafka\RejectClientVpcConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $VpcConnectionArn
 */
class RejectClientVpcConnectionRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     VpcConnectionArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
