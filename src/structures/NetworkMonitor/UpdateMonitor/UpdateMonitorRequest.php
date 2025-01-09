<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\UpdateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property int<30, max> $aggregationPeriod
 */
class UpdateMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     aggregationPeriod: int<30, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
