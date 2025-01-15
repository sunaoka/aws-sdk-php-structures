<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteConfigurationSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ConfigurationSetArn
 * @property string|null $ConfigurationSetName
 * @property list<Shapes\EventDestination>|null $EventDestinations
 * @property 'TRANSACTIONAL'|'PROMOTIONAL'|null $DefaultMessageType
 * @property string|null $DefaultSenderId
 * @property bool|null $DefaultMessageFeedbackEnabled
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 */
class DeleteConfigurationSetResponse extends Response
{
}
