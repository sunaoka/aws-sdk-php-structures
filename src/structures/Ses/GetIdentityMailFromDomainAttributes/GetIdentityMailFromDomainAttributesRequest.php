<?php

namespace Sunaoka\Aws\Structures\Ses\GetIdentityMailFromDomainAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Identities
 */
class GetIdentityMailFromDomainAttributesRequest extends Request
{
    /**
     * @param array{Identities: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
