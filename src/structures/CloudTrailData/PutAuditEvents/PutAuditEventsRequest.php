<?php

namespace Sunaoka\Aws\Structures\CloudTrailData\PutAuditEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AuditEvent> $auditEvents
 * @property string $channelArn
 * @property string|null $externalId
 */
class PutAuditEventsRequest extends Request
{
    /**
     * @param array{
     *     auditEvents: list<Shapes\AuditEvent>,
     *     channelArn: string,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
