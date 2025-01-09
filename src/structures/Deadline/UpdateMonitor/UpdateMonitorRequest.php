<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorId
 * @property string $subdomain
 * @property string $displayName
 * @property string $roleArn
 */
class UpdateMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorId: string,
     *     subdomain?: string,
     *     displayName?: string,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
