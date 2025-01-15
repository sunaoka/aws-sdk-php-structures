<?php

namespace Sunaoka\Aws\Structures\Kafka\GetCompatibleKafkaVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterArn
 */
class GetCompatibleKafkaVersionsRequest extends Request
{
    /**
     * @param array{ClusterArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
