<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeElasticIps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $StackId
 * @property list<string> $Ips
 */
class DescribeElasticIpsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     StackId?: string,
     *     Ips?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
