<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeConfigurationSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigurationSetArn
 * @property string $ConfigurationSetName
 * @property list<EventDestination> $EventDestinations
 * @property 'TRANSACTIONAL'|'PROMOTIONAL'|null $DefaultMessageType
 * @property string|null $DefaultSenderId
 * @property bool|null $DefaultMessageFeedbackEnabled
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property string|null $ProtectConfigurationId
 */
class ConfigurationSetInformation extends Shape
{
    /**
     * @param array{
     *     ConfigurationSetArn: string,
     *     ConfigurationSetName: string,
     *     EventDestinations: list<EventDestination>,
     *     DefaultMessageType?: 'TRANSACTIONAL'|'PROMOTIONAL'|null,
     *     DefaultSenderId?: string|null,
     *     DefaultMessageFeedbackEnabled?: bool|null,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult,
     *     ProtectConfigurationId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
