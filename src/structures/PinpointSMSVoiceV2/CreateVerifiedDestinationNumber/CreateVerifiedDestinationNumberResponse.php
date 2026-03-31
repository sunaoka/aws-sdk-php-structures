<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateVerifiedDestinationNumber;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $VerifiedDestinationNumberArn
 * @property string $VerifiedDestinationNumberId
 * @property string $DestinationPhoneNumber
 * @property 'PENDING'|'VERIFIED'|'UNSUPPORTED' $Status
 * @property string|null $RcsAgentId
 * @property list<Shapes\Tag>|null $Tags
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class CreateVerifiedDestinationNumberResponse extends Response
{
}
