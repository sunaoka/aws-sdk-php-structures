<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\StartServiceSoftwareUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property 'NOW'|'TIMESTAMP'|'OFF_PEAK_WINDOW'|null $ScheduleAt
 * @property int|null $DesiredStartTime
 */
class StartServiceSoftwareUpdateRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ScheduleAt?: 'NOW'|'TIMESTAMP'|'OFF_PEAK_WINDOW'|null,
     *     DesiredStartTime?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
