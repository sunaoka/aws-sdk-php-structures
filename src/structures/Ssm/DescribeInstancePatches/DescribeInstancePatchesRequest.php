<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstancePatches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<Shapes\PatchOrchestratorFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeInstancePatchesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Filters?: list<Shapes\PatchOrchestratorFilter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
