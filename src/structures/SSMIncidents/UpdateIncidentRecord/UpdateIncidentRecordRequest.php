<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateIncidentRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property Shapes\ChatChannel|null $chatChannel
 * @property string|null $clientToken
 * @property int<1, 5>|null $impact
 * @property list<Shapes\NotificationTargetItem>|null $notificationTargets
 * @property 'OPEN'|'RESOLVED'|null $status
 * @property string|null $summary
 * @property string|null $title
 */
class UpdateIncidentRecordRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     chatChannel?: Shapes\ChatChannel|null,
     *     clientToken?: string|null,
     *     impact?: int<1, 5>|null,
     *     notificationTargets?: list<Shapes\NotificationTargetItem>|null,
     *     status?: 'OPEN'|'RESOLVED'|null,
     *     summary?: string|null,
     *     title?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
