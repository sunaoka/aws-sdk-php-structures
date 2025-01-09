<?php

namespace Sunaoka\Aws\Structures\Connect\SendChatIntegrationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SupportedMessagingContentTypes
 * @property ParticipantDetails $ParticipantDetails
 * @property array<string, string> $Attributes
 * @property ChatStreamingConfiguration $StreamingConfiguration
 */
class NewSessionDetails extends Shape
{
    /**
     * @param array{
     *     SupportedMessagingContentTypes?: list<string>,
     *     ParticipantDetails?: ParticipantDetails,
     *     Attributes?: array<string, string>,
     *     StreamingConfiguration?: ChatStreamingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
