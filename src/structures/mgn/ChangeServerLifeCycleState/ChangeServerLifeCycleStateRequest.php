<?php

namespace Sunaoka\Aws\Structures\mgn\ChangeServerLifeCycleState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 * @property Shapes\ChangeServerLifeCycleStateSourceServerLifecycle $lifeCycle
 * @property string|null $accountID
 */
class ChangeServerLifeCycleStateRequest extends Request
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     lifeCycle: Shapes\ChangeServerLifeCycleStateSourceServerLifecycle,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
