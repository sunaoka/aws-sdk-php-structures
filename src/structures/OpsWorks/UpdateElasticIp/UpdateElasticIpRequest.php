<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateElasticIp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ElasticIp
 * @property string $Name
 */
class UpdateElasticIpRequest extends Request
{
    /**
     * @param array{
     *     ElasticIp: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
