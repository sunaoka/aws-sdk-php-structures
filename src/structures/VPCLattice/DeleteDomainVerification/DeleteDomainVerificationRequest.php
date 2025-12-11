<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteDomainVerification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainVerificationIdentifier
 */
class DeleteDomainVerificationRequest extends Request
{
    /**
     * @param array{domainVerificationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
