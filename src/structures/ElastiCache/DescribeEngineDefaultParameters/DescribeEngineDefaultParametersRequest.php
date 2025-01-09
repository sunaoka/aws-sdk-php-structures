<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeEngineDefaultParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheParameterGroupFamily
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeEngineDefaultParametersRequest extends Request
{
    /**
     * @param array{
     *     CacheParameterGroupFamily: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
