<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAwsNetworkPerformanceData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DataQuery>|null $DataQueries
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class GetAwsNetworkPerformanceDataRequest extends Request
{
    /**
     * @param array{
     *     DataQueries?: list<Shapes\DataQuery>|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
