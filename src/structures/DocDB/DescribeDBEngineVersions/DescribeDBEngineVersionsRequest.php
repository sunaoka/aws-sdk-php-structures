<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBEngineVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $DBParameterGroupFamily
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 * @property bool $DefaultOnly
 * @property bool $ListSupportedCharacterSets
 * @property bool $ListSupportedTimezones
 */
class DescribeDBEngineVersionsRequest extends Request
{
    /**
     * @param array{
     *     Engine?: string,
     *     EngineVersion?: string,
     *     DBParameterGroupFamily?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     DefaultOnly?: bool,
     *     ListSupportedCharacterSets?: bool,
     *     ListSupportedTimezones?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
