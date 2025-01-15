<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstancePatches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<Shapes\PatchOrchestratorFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<10, 100>|null $MaxResults
 */
class DescribeInstancePatchesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Filters?: list<Shapes\PatchOrchestratorFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<10, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
