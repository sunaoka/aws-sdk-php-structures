<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDefaultClusterParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupFamily
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDefaultClusterParametersRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupFamily: string,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
