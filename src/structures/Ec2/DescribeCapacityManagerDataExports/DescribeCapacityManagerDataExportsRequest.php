<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityManagerDataExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $CapacityManagerDataExportIds
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeCapacityManagerDataExportsRequest extends Request
{
    /**
     * @param array{
     *     CapacityManagerDataExportIds?: list<string>|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
