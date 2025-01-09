<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptionGroupName
 * @property list<Shapes\Filter> $Filters
 * @property string $Marker
 * @property int $MaxRecords
 * @property string $EngineName
 * @property string $MajorEngineVersion
 */
class DescribeOptionGroupsRequest extends Request
{
    /**
     * @param array{
     *     OptionGroupName?: string,
     *     Filters?: list<Shapes\Filter>,
     *     Marker?: string,
     *     MaxRecords?: int,
     *     EngineName?: string,
     *     MajorEngineVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
