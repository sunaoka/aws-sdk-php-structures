<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheEngineVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $CacheParameterGroupFamily
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property bool|null $DefaultOnly
 */
class DescribeCacheEngineVersionsRequest extends Request
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     CacheParameterGroupFamily?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     DefaultOnly?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
