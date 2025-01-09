<?php

namespace Sunaoka\Aws\Structures\Iam\ListPoliciesGrantingServiceAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property string $Arn
 * @property list<string> $ServiceNamespaces
 */
class ListPoliciesGrantingServiceAccessRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     Arn: string,
     *     ServiceNamespaces: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
