<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\PutRumEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AppMonitorDetails $AppMonitorDetails
 * @property string $BatchId
 * @property string $Id
 * @property list<Shapes\RumEvent> $RumEvents
 * @property Shapes\UserDetails $UserDetails
 */
class PutRumEventsRequest extends Request
{
    /**
     * @param array{
     *     AppMonitorDetails: Shapes\AppMonitorDetails,
     *     BatchId: string,
     *     Id: string,
     *     RumEvents: list<Shapes\RumEvent>,
     *     UserDetails: Shapes\UserDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
