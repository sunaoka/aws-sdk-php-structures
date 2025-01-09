<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListWorkloads;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadNamePrefix
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListWorkloadsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadNamePrefix?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
