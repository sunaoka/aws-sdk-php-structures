<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AwsSecurityFindingIdentifier $FindingIdentifier
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class GetFindingHistoryRequest extends Request
{
    /**
     * @param array{
     *     FindingIdentifier: Shapes\AwsSecurityFindingIdentifier,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
