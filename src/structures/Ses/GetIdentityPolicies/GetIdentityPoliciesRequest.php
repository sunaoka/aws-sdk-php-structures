<?php

namespace Sunaoka\Aws\Structures\Ses\GetIdentityPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identity
 * @property list<string> $PolicyNames
 */
class GetIdentityPoliciesRequest extends Request
{
    /**
     * @param array{
     *     Identity: string,
     *     PolicyNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
