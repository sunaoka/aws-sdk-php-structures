<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetMilestone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property int<1, 100> $MilestoneNumber
 */
class GetMilestoneRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     MilestoneNumber: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
