<?php

namespace Sunaoka\Aws\Structures\Connect\CreatePushNotificationRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactId
 * @property 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR' $ParticipantRole
 * @property bool $IncludeRawMessage
 */
class ContactConfiguration extends Shape
{
    /**
     * @param array{
     *     ContactId: string,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR',
     *     IncludeRawMessage?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
