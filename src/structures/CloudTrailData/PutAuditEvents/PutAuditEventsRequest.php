<?php

namespace Sunaoka\Aws\Structures\CloudTrailData\PutAuditEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AuditEvent> $auditEvents
 * @property string $channelArn
 * @property string $externalId
 */
class PutAuditEventsRequest extends Request
{
    /**
     * @param array{
     *     auditEvents: list<Shapes\AuditEvent>,
     *     channelArn: string,
     *     externalId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
