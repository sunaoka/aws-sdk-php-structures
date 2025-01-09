<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheParameterGroupName
 * @property string $Source
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeCacheParametersRequest extends Request
{
    /**
     * @param array{
     *     CacheParameterGroupName: string,
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
