<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateElasticIp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ElasticIp
 * @property string|null $Name
 */
class UpdateElasticIpRequest extends Request
{
    /**
     * @param array{
     *     ElasticIp: string,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
