<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteConfigurationSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConfigurationSetArn
 * @property string $ConfigurationSetName
 * @property list<Shapes\EventDestination> $EventDestinations
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $DefaultMessageType
 * @property string $DefaultSenderId
 * @property bool $DefaultMessageFeedbackEnabled
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class DeleteConfigurationSetResponse extends Response
{
}
