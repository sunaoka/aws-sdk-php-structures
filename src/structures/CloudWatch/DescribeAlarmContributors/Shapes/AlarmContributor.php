<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmContributors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContributorId
 * @property array<string, string> $ContributorAttributes
 * @property string $StateReason
 * @property \Aws\Api\DateTimeResult|null $StateTransitionedTimestamp
 */
class AlarmContributor extends Shape
{
    /**
     * @param array{
     *     ContributorId: string,
     *     ContributorAttributes: array<string, string>,
     *     StateReason: string,
     *     StateTransitionedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
