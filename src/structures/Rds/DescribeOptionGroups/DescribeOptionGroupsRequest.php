<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $OptionGroupName
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $Marker
 * @property int|null $MaxRecords
 * @property string|null $EngineName
 * @property string|null $MajorEngineVersion
 */
class DescribeOptionGroupsRequest extends Request
{
    /**
     * @param array{
     *     OptionGroupName?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     Marker?: string|null,
     *     MaxRecords?: int|null,
     *     EngineName?: string|null,
     *     MajorEngineVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
