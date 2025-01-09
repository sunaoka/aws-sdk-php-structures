<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeConfigurationSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigurationSetArn
 * @property string $ConfigurationSetName
 * @property list<EventDestination> $EventDestinations
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $DefaultMessageType
 * @property string $DefaultSenderId
 * @property bool $DefaultMessageFeedbackEnabled
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property string $ProtectConfigurationId
 */
class ConfigurationSetInformation extends Shape
{
    /**
     * @param array{
     *     ConfigurationSetArn: string,
     *     ConfigurationSetName: string,
     *     EventDestinations: list<EventDestination>,
     *     DefaultMessageType?: 'TRANSACTIONAL'|'PROMOTIONAL',
     *     DefaultSenderId?: string,
     *     DefaultMessageFeedbackEnabled?: bool,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult,
     *     ProtectConfigurationId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
