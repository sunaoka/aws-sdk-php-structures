<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetMilestone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property int $MilestoneNumber
 */
class GetMilestoneRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     MilestoneNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
