<?php

namespace Sunaoka\Aws\Structures\Connect\CreatePushNotificationRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactId
 * @property 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR'|null $ParticipantRole
 * @property bool|null $IncludeRawMessage
 */
class ContactConfiguration extends Shape
{
    /**
     * @param array{
     *     ContactId: string,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR'|null,
     *     IncludeRawMessage?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
