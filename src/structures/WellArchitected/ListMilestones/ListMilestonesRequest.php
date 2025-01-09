<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListMilestones;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListMilestonesRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
