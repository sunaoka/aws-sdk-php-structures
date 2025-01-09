<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAwsNetworkPerformanceData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DataQuery> $DataQueries
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class GetAwsNetworkPerformanceDataRequest extends Request
{
    /**
     * @param array{
     *     DataQueries?: list<Shapes\DataQuery>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
