<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListMilestones;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListMilestonesRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
