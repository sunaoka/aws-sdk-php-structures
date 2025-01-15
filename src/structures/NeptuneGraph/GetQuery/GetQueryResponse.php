<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetQuery;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $queryString
 * @property int|null $waited
 * @property int|null $elapsed
 * @property 'RUNNING'|'WAITING'|'CANCELLING'|null $state
 */
class GetQueryResponse extends Response
{
}
