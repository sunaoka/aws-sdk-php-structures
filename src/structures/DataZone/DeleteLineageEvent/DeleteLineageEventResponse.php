<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteLineageEvent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $domainId
 * @property 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null $processingStatus
 */
class DeleteLineageEventResponse extends Response
{
}
