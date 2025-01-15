<?php

namespace Sunaoka\Aws\Structures\Connect\SendChatIntegrationEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceId
 * @property string $DestinationId
 * @property string|null $Subtype
 * @property Shapes\ChatEvent $Event
 * @property Shapes\NewSessionDetails|null $NewSessionDetails
 */
class SendChatIntegrationEventRequest extends Request
{
    /**
     * @param array{
     *     SourceId: string,
     *     DestinationId: string,
     *     Subtype?: string|null,
     *     Event: Shapes\ChatEvent,
     *     NewSessionDetails?: Shapes\NewSessionDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
