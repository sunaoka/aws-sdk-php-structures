<?php

namespace Sunaoka\Aws\Structures\DataZone\GetLineageEvent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $domainId
 * @property string|null $id
 * @property \Psr\Http\Message\StreamInterface $event
 * @property string|null $createdBy
 * @property 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null $processingStatus
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class GetLineageEventResponse extends Response
{
}
