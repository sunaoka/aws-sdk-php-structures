<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property list<Shapes\PatchOrchestratorFilter>|null $Filters
 * @property string|null $NextToken
 */
class DescribePatchGroupsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     Filters?: list<Shapes\PatchOrchestratorFilter>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
