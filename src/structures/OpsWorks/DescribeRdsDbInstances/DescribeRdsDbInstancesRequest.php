<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeRdsDbInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property list<string>|null $RdsDbInstanceArns
 */
class DescribeRdsDbInstancesRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     RdsDbInstanceArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
