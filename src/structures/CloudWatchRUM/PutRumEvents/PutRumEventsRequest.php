<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\PutRumEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $BatchId
 * @property Shapes\AppMonitorDetails $AppMonitorDetails
 * @property Shapes\UserDetails $UserDetails
 * @property list<Shapes\RumEvent> $RumEvents
 * @property string|null $Alias
 */
class PutRumEventsRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     BatchId: string,
     *     AppMonitorDetails: Shapes\AppMonitorDetails,
     *     UserDetails: Shapes\UserDetails,
     *     RumEvents: list<Shapes\RumEvent>,
     *     Alias?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
