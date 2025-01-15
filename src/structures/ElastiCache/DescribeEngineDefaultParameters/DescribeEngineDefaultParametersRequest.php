<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeEngineDefaultParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheParameterGroupFamily
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeEngineDefaultParametersRequest extends Request
{
    /**
     * @param array{
     *     CacheParameterGroupFamily: string,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
