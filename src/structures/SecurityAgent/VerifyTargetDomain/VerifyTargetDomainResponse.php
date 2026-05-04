<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\VerifyTargetDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $targetDomainId
 * @property string|null $domainName
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property \Aws\Api\DateTimeResult|null $verifiedAt
 * @property 'PENDING'|'VERIFIED'|'FAILED'|'UNREACHABLE'|null $status
 * @property string|null $verificationStatusReason
 */
class VerifyTargetDomainResponse extends Response
{
}
