<?php

namespace Sunaoka\Aws\Structures\DataZone\GetLineageEvent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $domainId
 * @property \Psr\Http\Message\StreamInterface $event
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property string|null $id
 * @property 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null $processingStatus
 */
class GetLineageEventResponse extends Response
{
}
