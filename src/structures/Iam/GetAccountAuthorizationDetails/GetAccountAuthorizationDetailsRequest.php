<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'User'|'Role'|'Group'|'LocalManagedPolicy'|'AWSManagedPolicy'>|null $Filter
 * @property int<1, 1000>|null $MaxItems
 * @property string|null $Marker
 */
class GetAccountAuthorizationDetailsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: list<'User'|'Role'|'Group'|'LocalManagedPolicy'|'AWSManagedPolicy'>|null,
     *     MaxItems?: int<1, 1000>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
