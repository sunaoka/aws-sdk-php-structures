<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'User'|'Role'|'Group'|'LocalManagedPolicy'|'AWSManagedPolicy'> $Filter
 * @property int $MaxItems
 * @property string $Marker
 */
class GetAccountAuthorizationDetailsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: list<'User'|'Role'|'Group'|'LocalManagedPolicy'|'AWSManagedPolicy'>,
     *     MaxItems?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
