<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeRaidArrays;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $InstanceId
 * @property string|null $StackId
 * @property list<string>|null $RaidArrayIds
 */
class DescribeRaidArraysRequest extends Request
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     StackId?: string|null,
     *     RaidArrayIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
