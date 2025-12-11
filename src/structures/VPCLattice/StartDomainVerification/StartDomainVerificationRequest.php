<?php

namespace Sunaoka\Aws\Structures\VPCLattice\StartDomainVerification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainName
 * @property array<string, string>|null $tags
 */
class StartDomainVerificationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainName: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
