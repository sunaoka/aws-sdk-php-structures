<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetDomainVerification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainVerificationIdentifier
 */
class GetDomainVerificationRequest extends Request
{
    /**
     * @param array{domainVerificationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
