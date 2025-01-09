<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\VerifyDestinationNumber;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $VerifiedDestinationNumberArn
 * @property string $VerifiedDestinationNumberId
 * @property string $DestinationPhoneNumber
 * @property 'PENDING'|'VERIFIED' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class VerifyDestinationNumberResponse extends Response
{
}
