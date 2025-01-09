<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\UpdateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property int $aggregationPeriod
 */
class UpdateMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     aggregationPeriod: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
