<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeElasticIps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $InstanceId
 * @property string|null $StackId
 * @property list<string>|null $Ips
 */
class DescribeElasticIpsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     StackId?: string|null,
     *     Ips?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
