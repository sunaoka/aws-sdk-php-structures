<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string $LayerId
 * @property list<string> $InstanceIds
 */
class DescribeInstancesRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string,
     *     LayerId?: string,
     *     InstanceIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
