<?php

namespace Sunaoka\Aws\Structures\AppFabric\StartUserAccessTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $email
 */
class StartUserAccessTasksRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     email: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
