<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\StartQuery;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $queryId
 * @property 'SUBMITTED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELED'|'CANCELING' $status
 */
class StartQueryResponse extends Response
{
}
