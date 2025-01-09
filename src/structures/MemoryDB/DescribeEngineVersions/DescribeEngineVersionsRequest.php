<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeEngineVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $ParameterGroupFamily
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DefaultOnly
 */
class DescribeEngineVersionsRequest extends Request
{
    /**
     * @param array{
     *     Engine?: string,
     *     EngineVersion?: string,
     *     ParameterGroupFamily?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DefaultOnly?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
