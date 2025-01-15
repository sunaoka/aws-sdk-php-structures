<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheParameterGroupName
 * @property string|null $Source
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeCacheParametersRequest extends Request
{
    /**
     * @param array{
     *     CacheParameterGroupName: string,
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
