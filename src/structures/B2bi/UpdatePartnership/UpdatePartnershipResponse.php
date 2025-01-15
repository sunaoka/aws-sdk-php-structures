<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdatePartnership;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $profileId
 * @property string $partnershipId
 * @property string $partnershipArn
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property list<string>|null $capabilities
 * @property Shapes\CapabilityOptions|null $capabilityOptions
 * @property string|null $tradingPartnerId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 */
class UpdatePartnershipResponse extends Response
{
}
