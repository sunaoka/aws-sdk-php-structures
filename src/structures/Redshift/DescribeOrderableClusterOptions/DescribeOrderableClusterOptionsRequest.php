<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeOrderableClusterOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterVersion
 * @property string|null $NodeType
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeOrderableClusterOptionsRequest extends Request
{
    /**
     * @param array{
     *     ClusterVersion?: string|null,
     *     NodeType?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
