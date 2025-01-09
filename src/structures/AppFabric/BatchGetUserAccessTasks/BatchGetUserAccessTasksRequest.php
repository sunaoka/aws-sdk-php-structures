<?php

namespace Sunaoka\Aws\Structures\AppFabric\BatchGetUserAccessTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property list<string> $taskIdList
 */
class BatchGetUserAccessTasksRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     taskIdList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
