<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateIncidentRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property Shapes\ChatChannel $chatChannel
 * @property string $clientToken
 * @property int<1, 5> $impact
 * @property list<Shapes\NotificationTargetItem> $notificationTargets
 * @property 'OPEN'|'RESOLVED' $status
 * @property string $summary
 * @property string $title
 */
class UpdateIncidentRecordRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     chatChannel?: Shapes\ChatChannel,
     *     clientToken?: string,
     *     impact?: int<1, 5>,
     *     notificationTargets?: list<Shapes\NotificationTargetItem>,
     *     status?: 'OPEN'|'RESOLVED',
     *     summary?: string,
     *     title?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
