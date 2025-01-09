<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetQueryStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELED' $Status
 */
class GetQueryStatusResponse extends Response
{
}
