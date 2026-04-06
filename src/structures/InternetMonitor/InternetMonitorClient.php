<?php

namespace Sunaoka\Aws\Structures\InternetMonitor;

class InternetMonitorClient extends \Aws\InternetMonitor\InternetMonitorClient
{
    use CreateMonitor\CreateMonitorTrait;
    use DeleteMonitor\DeleteMonitorTrait;
    use GetHealthEvent\GetHealthEventTrait;
    use GetMonitor\GetMonitorTrait;
    use ListHealthEvents\ListHealthEventsTrait;
    use ListMonitors\ListMonitorsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMonitor\UpdateMonitorTrait;
}
