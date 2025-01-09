<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeOrderableClusterOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterVersion
 * @property string $NodeType
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeOrderableClusterOptionsRequest extends Request
{
    /**
     * @param array{
     *     ClusterVersion?: string,
     *     NodeType?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
