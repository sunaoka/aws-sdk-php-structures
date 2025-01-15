<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListWorkloads;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $WorkloadNamePrefix
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListWorkloadsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadNamePrefix?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
