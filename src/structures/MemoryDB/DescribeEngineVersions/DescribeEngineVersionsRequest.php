<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeEngineVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $ParameterGroupFamily
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DefaultOnly
 */
class DescribeEngineVersionsRequest extends Request
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     ParameterGroupFamily?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     DefaultOnly?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
