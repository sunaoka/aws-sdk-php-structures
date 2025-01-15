<?php

namespace Sunaoka\Aws\Structures\Redshift\RevokeEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $Account
 * @property list<string>|null $VpcIds
 * @property bool|null $Force
 */
class RevokeEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     Account?: string|null,
     *     VpcIds?: list<string>|null,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
