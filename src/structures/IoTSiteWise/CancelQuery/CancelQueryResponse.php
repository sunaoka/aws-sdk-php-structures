<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CancelQuery;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $queryId
 * @property 'SUBMITTED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELED'|'CANCELING' $status
 */
class CancelQueryResponse extends Response
{
}
