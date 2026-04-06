<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor;

class NetworkMonitorClient extends \Aws\NetworkMonitor\NetworkMonitorClient
{
    use CreateMonitor\CreateMonitorTrait;
    use CreateProbe\CreateProbeTrait;
    use DeleteMonitor\DeleteMonitorTrait;
    use DeleteProbe\DeleteProbeTrait;
    use GetMonitor\GetMonitorTrait;
    use GetProbe\GetProbeTrait;
    use ListMonitors\ListMonitorsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMonitor\UpdateMonitorTrait;
    use UpdateProbe\UpdateProbeTrait;
}
