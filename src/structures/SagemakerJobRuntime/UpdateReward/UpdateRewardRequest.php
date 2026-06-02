<?php

namespace Sunaoka\Aws\Structures\SagemakerJobRuntime\UpdateReward;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobArn
 * @property string $TrajectoryId
 * @property list<double> $Rewards
 * @property string|null $ClientToken
 */
class UpdateRewardRequest extends Request
{
    /**
     * @param array{
     *     JobArn: string,
     *     TrajectoryId: string,
     *     Rewards: list<double>,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
