<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReplicationStatusSummary> $ReplicationStatusSummaryList
 * @property string $SourceRegion
 * @property string $GlobalSignInEndpoint
 */
class ReplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     ReplicationStatusSummaryList?: list<ReplicationStatusSummary>,
     *     SourceRegion?: string,
     *     GlobalSignInEndpoint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
