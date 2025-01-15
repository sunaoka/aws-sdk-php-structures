<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StackId
 * @property string|null $LayerId
 * @property list<string>|null $InstanceIds
 */
class DescribeInstancesRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string|null,
     *     LayerId?: string|null,
     *     InstanceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
