<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDefaultClusterParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupFamily
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDefaultClusterParametersRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupFamily: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
