<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $ResourceOwner
 * @property string $EndpointName
 * @property string $VpcId
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     ResourceOwner?: string,
     *     EndpointName?: string,
     *     VpcId?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
