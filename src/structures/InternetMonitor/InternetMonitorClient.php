<?php

namespace Sunaoka\Aws\Structures\InternetMonitor;

class InternetMonitorClient extends \Aws\InternetMonitor\InternetMonitorClient
{
    use CreateMonitor\CreateMonitorTrait;
    use DeleteMonitor\DeleteMonitorTrait;
    use GetHealthEvent\GetHealthEventTrait;
    use GetInternetEvent\GetInternetEventTrait;
    use GetMonitor\GetMonitorTrait;
    use GetQueryResults\GetQueryResultsTrait;
    use GetQueryStatus\GetQueryStatusTrait;
    use ListHealthEvents\ListHealthEventsTrait;
    use ListInternetEvents\ListInternetEventsTrait;
    use ListMonitors\ListMonitorsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartQuery\StartQueryTrait;
    use StopQuery\StopQueryTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMonitor\UpdateMonitorTrait;
}
