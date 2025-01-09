<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property string $Source
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeClusterParametersRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName: string,
     *     Source?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
