<?php

namespace Sunaoka\Aws\Structures\OpsWorks\AssociateElasticIp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ElasticIp
 * @property string $InstanceId
 */
class AssociateElasticIpRequest extends Request
{
    /**
     * @param array{
     *     ElasticIp: string,
     *     InstanceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
