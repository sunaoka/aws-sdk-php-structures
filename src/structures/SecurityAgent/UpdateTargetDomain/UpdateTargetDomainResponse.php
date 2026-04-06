<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateTargetDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $targetDomainId
 * @property string $domainName
 * @property 'PENDING'|'VERIFIED'|'FAILED'|'UNREACHABLE' $verificationStatus
 * @property Shapes\VerificationDetails|null $verificationDetails
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $verifiedAt
 */
class UpdateTargetDomainResponse extends Response
{
}
