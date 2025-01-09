<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeRaidArrays;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $StackId
 * @property list<string> $RaidArrayIds
 */
class DescribeRaidArraysRequest extends Request
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     StackId?: string,
     *     RaidArrayIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
