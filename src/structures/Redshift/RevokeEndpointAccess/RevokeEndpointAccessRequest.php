<?php

namespace Sunaoka\Aws\Structures\Redshift\RevokeEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $Account
 * @property list<string> $VpcIds
 * @property bool $Force
 */
class RevokeEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     Account?: string,
     *     VpcIds?: list<string>,
     *     Force?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
