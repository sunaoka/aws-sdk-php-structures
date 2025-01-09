<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstancePatchStatesForPatchGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PatchGroup
 * @property list<Shapes\InstancePatchStateFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeInstancePatchStatesForPatchGroupRequest extends Request
{
    /**
     * @param array{
     *     PatchGroup: string,
     *     Filters?: list<Shapes\InstancePatchStateFilter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
