<?php

namespace Sunaoka\Aws\Structures\Connect\MonitorContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property string $UserId
 * @property list<'SILENT_MONITOR'|'BARGE'>|null $AllowedMonitorCapabilities
 * @property string|null $ClientToken
 */
class MonitorContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     UserId: string,
     *     AllowedMonitorCapabilities?: list<'SILENT_MONITOR'|'BARGE'>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
