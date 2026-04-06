<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $displayName
 * @property string $monitorId
 * @property string|null $roleArn
 * @property string|null $subdomain
 */
class UpdateMonitorRequest extends Request
{
    /**
     * @param array{
     *     displayName?: string|null,
     *     monitorId: string,
     *     roleArn?: string|null,
     *     subdomain?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
