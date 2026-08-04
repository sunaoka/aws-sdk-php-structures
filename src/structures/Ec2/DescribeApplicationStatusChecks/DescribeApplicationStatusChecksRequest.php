<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeApplicationStatusChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ApplicationStatusCheckIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int<5, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $IncludeAll
 * @property bool|null $DryRun
 */
class DescribeApplicationStatusChecksRequest extends Request
{
    /**
     * @param array{
     *     ApplicationStatusCheckIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<5, 100>|null,
     *     NextToken?: string|null,
     *     IncludeAll?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
