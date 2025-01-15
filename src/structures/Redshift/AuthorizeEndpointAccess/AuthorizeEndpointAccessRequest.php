<?php

namespace Sunaoka\Aws\Structures\Redshift\AuthorizeEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property string $Account
 * @property list<string>|null $VpcIds
 */
class AuthorizeEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     Account: string,
     *     VpcIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
