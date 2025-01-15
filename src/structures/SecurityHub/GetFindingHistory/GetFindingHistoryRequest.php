<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AwsSecurityFindingIdentifier $FindingIdentifier
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetFindingHistoryRequest extends Request
{
    /**
     * @param array{
     *     FindingIdentifier: Shapes\AwsSecurityFindingIdentifier,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
