<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property list<Shapes\PatchOrchestratorFilter> $Filters
 * @property string $NextToken
 */
class DescribePatchGroupsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     Filters?: list<Shapes\PatchOrchestratorFilter>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
