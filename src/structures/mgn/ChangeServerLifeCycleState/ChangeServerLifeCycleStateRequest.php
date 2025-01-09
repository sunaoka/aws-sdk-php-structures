<?php

namespace Sunaoka\Aws\Structures\mgn\ChangeServerLifeCycleState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property Shapes\ChangeServerLifeCycleStateSourceServerLifecycle $lifeCycle
 * @property string $sourceServerID
 */
class ChangeServerLifeCycleStateRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     lifeCycle: Shapes\ChangeServerLifeCycleStateSourceServerLifecycle,
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
