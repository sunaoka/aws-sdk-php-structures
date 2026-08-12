<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentGoal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileArn
 * @property string $id
 */
class GetAgentGoalRequest extends Request
{
    /**
     * @param array{
     *     profileArn: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
