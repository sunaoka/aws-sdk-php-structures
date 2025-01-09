<?php

namespace Sunaoka\Aws\Structures\Iot\CreateProvisioningClaim;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $certificateId
 * @property string $certificatePem
 * @property Shapes\KeyPair $keyPair
 * @property \Aws\Api\DateTimeResult $expiration
 */
class CreateProvisioningClaimResponse extends Response
{
}
