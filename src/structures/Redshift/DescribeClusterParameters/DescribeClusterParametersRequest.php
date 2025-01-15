<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property string|null $Source
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeClusterParametersRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName: string,
     *     Source?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
