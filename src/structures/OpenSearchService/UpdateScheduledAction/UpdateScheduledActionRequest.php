<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateScheduledAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ActionID
 * @property 'SERVICE_SOFTWARE_UPDATE'|'JVM_HEAP_SIZE_TUNING'|'JVM_YOUNG_GEN_TUNING' $ActionType
 * @property 'NOW'|'TIMESTAMP'|'OFF_PEAK_WINDOW' $ScheduleAt
 * @property int $DesiredStartTime
 */
class UpdateScheduledActionRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ActionID: string,
     *     ActionType: 'SERVICE_SOFTWARE_UPDATE'|'JVM_HEAP_SIZE_TUNING'|'JVM_YOUNG_GEN_TUNING',
     *     ScheduleAt: 'NOW'|'TIMESTAMP'|'OFF_PEAK_WINDOW',
     *     DesiredStartTime?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
