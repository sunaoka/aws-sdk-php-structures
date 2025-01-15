<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $ResourceOwner
 * @property string|null $EndpointName
 * @property string|null $VpcId
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     ResourceOwner?: string|null,
     *     EndpointName?: string|null,
     *     VpcId?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
