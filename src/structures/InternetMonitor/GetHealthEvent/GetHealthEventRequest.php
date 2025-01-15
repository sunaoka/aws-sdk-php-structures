<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetHealthEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property string $EventId
 * @property string|null $LinkedAccountId
 */
class GetHealthEventRequest extends Request
{
    /**
     * @param array{
     *     MonitorName: string,
     *     EventId: string,
     *     LinkedAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
