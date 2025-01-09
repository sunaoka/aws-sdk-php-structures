<?php

namespace Sunaoka\Aws\Structures\Redshift\AuthorizeEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $Account
 * @property list<string> $VpcIds
 */
class AuthorizeEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     Account: string,
     *     VpcIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
