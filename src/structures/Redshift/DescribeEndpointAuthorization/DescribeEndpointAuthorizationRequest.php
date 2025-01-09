<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEndpointAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $Account
 * @property bool $Grantee
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeEndpointAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     Account?: string,
     *     Grantee?: bool,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
