<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsSecurityFindingIdentifier $FindingIdentifier
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property bool $FindingCreated
 * @property FindingHistoryUpdateSource $UpdateSource
 * @property list<FindingHistoryUpdate> $Updates
 * @property string $NextToken
 */
class FindingHistoryRecord extends Shape
{
    /**
     * @param array{
     *     FindingIdentifier?: AwsSecurityFindingIdentifier,
     *     UpdateTime?: \Aws\Api\DateTimeResult,
     *     FindingCreated?: bool,
     *     UpdateSource?: FindingHistoryUpdateSource,
     *     Updates?: list<FindingHistoryUpdate>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
