<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBEngineVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $DBParameterGroupFamily
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property bool|null $DefaultOnly
 * @property bool|null $ListSupportedCharacterSets
 * @property bool|null $ListSupportedTimezones
 */
class DescribeDBEngineVersionsRequest extends Request
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     DBParameterGroupFamily?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     DefaultOnly?: bool|null,
     *     ListSupportedCharacterSets?: bool|null,
     *     ListSupportedTimezones?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
