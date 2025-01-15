<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsSecurityFindingIdentifier|null $FindingIdentifier
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 * @property bool|null $FindingCreated
 * @property FindingHistoryUpdateSource|null $UpdateSource
 * @property list<FindingHistoryUpdate>|null $Updates
 * @property string|null $NextToken
 */
class FindingHistoryRecord extends Shape
{
    /**
     * @param array{
     *     FindingIdentifier?: AwsSecurityFindingIdentifier|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null,
     *     FindingCreated?: bool|null,
     *     UpdateSource?: FindingHistoryUpdateSource|null,
     *     Updates?: list<FindingHistoryUpdate>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
