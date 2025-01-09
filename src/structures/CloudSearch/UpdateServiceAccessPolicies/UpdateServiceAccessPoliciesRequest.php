<?php

namespace Sunaoka\Aws\Structures\CloudSearch\UpdateServiceAccessPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $AccessPolicies
 */
class UpdateServiceAccessPoliciesRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AccessPolicies: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
