<?php

namespace Sunaoka\Aws\Structures\Connect\SendChatIntegrationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SupportedMessagingContentTypes
 * @property ParticipantDetails|null $ParticipantDetails
 * @property array<string, string>|null $Attributes
 * @property ChatStreamingConfiguration|null $StreamingConfiguration
 */
class NewSessionDetails extends Shape
{
    /**
     * @param array{
     *     SupportedMessagingContentTypes?: list<string>|null,
     *     ParticipantDetails?: ParticipantDetails|null,
     *     Attributes?: array<string, string>|null,
     *     StreamingConfiguration?: ChatStreamingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
