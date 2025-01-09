<?php

namespace Sunaoka\Aws\Structures\Ses\VerifyDomainIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 */
class VerifyDomainIdentityRequest extends Request
{
    /**
     * @param array{Domain: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
