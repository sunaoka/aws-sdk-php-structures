<?php

namespace Sunaoka\Aws\Structures\Iot\CreateProvisioningClaim;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $certificateId
 * @property string|null $certificatePem
 * @property Shapes\KeyPair|null $keyPair
 * @property \Aws\Api\DateTimeResult|null $expiration
 */
class CreateProvisioningClaimResponse extends Response
{
}
