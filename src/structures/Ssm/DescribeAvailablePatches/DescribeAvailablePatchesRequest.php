<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAvailablePatches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PatchOrchestratorFilter>|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeAvailablePatchesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\PatchOrchestratorFilter>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
