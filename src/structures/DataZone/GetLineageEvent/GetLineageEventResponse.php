<?php

namespace Sunaoka\Aws\Structures\DataZone\GetLineageEvent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $domainId
 * @property string $event
 * @property \Aws\Api\DateTimeResult $eventTime
 * @property string $id
 * @property 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED' $processingStatus
 */
class GetLineageEventResponse extends Response
{
}
