<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorId
 * @property string|null $subdomain
 * @property string|null $displayName
 * @property string|null $roleArn
 */
class UpdateMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorId: string,
     *     subdomain?: string|null,
     *     displayName?: string|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
