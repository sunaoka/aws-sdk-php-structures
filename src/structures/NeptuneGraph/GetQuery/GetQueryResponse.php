<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetQuery;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $queryString
 * @property int $waited
 * @property int $elapsed
 * @property 'RUNNING'|'WAITING'|'CANCELLING' $state
 */
class GetQueryResponse extends Response
{
}
