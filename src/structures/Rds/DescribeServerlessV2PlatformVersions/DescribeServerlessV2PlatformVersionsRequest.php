<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeServerlessV2PlatformVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ServerlessV2PlatformVersion
 * @property string|null $Engine
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DefaultOnly
 * @property bool|null $IncludeAll
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeServerlessV2PlatformVersionsRequest extends Request
{
    /**
     * @param array{
     *     ServerlessV2PlatformVersion?: string|null,
     *     Engine?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DefaultOnly?: bool|null,
     *     IncludeAll?: bool|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
