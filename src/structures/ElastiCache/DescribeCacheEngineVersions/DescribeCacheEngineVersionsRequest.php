<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheEngineVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $CacheParameterGroupFamily
 * @property int $MaxRecords
 * @property string $Marker
 * @property bool $DefaultOnly
 */
class DescribeCacheEngineVersionsRequest extends Request
{
    /**
     * @param array{
     *     Engine?: string,
     *     EngineVersion?: string,
     *     CacheParameterGroupFamily?: string,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     DefaultOnly?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
