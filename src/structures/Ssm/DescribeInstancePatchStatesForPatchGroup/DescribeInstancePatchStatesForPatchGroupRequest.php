<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstancePatchStatesForPatchGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PatchGroup
 * @property list<Shapes\InstancePatchStateFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<10, 100>|null $MaxResults
 */
class DescribeInstancePatchStatesForPatchGroupRequest extends Request
{
    /**
     * @param array{
     *     PatchGroup: string,
     *     Filters?: list<Shapes\InstancePatchStateFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<10, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
