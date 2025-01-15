<?php

namespace Sunaoka\Aws\Structures\OpsWorks\AssociateElasticIp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ElasticIp
 * @property string|null $InstanceId
 */
class AssociateElasticIpRequest extends Request
{
    /**
     * @param array{
     *     ElasticIp: string,
     *     InstanceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
