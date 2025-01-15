<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEndpointAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $Account
 * @property bool|null $Grantee
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeEndpointAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     Account?: string|null,
     *     Grantee?: bool|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
