<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBMajorEngineVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Engine
 * @property string|null $MajorEngineVersion
 * @property string|null $Marker
 * @property int<20, 100>|null $MaxRecords
 */
class DescribeDBMajorEngineVersionsRequest extends Request
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     MajorEngineVersion?: string|null,
     *     Marker?: string|null,
     *     MaxRecords?: int<20, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
