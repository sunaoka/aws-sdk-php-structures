<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'User'|'Role'|'Group'|'LocalManagedPolicy'|'AWSManagedPolicy'> $Filter
 * @property int<1, 1000> $MaxItems
 * @property string $Marker
 */
class GetAccountAuthorizationDetailsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: list<'User'|'Role'|'Group'|'LocalManagedPolicy'|'AWSManagedPolicy'>,
     *     MaxItems?: int<1, 1000>,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
