<?php

namespace Sunaoka\Aws\Structures\VPCLattice\StartDomainVerification;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $domainName
 * @property 'VERIFIED'|'PENDING'|'VERIFICATION_TIMED_OUT' $status
 * @property Shapes\TxtMethodConfig|null $txtMethodConfig
 */
class StartDomainVerificationResponse extends Response
{
}
