<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdatePartnership;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $profileId
 * @property string $partnershipId
 * @property string $partnershipArn
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property list<string> $capabilities
 * @property Shapes\CapabilityOptions $capabilityOptions
 * @property string $tradingPartnerId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 */
class UpdatePartnershipResponse extends Response
{
}
