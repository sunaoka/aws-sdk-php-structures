<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateMilestone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $MilestoneName
 * @property string $ClientRequestToken
 */
class CreateMilestoneRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     MilestoneName: string,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
