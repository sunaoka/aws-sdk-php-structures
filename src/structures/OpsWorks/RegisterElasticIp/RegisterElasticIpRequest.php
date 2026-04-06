<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RegisterElasticIp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ElasticIp
 * @property string $StackId
 */
class RegisterElasticIpRequest extends Request
{
    /**
     * @param array{
     *     ElasticIp: string,
     *     StackId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
