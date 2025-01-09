<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeregisterElasticIp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ElasticIp
 */
class DeregisterElasticIpRequest extends Request
{
    /**
     * @param array{ElasticIp: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
