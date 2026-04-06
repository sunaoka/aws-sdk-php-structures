<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReplicationStatusSummary>|null $ReplicationStatusSummaryList
 * @property string|null $SourceRegion
 * @property string|null $GlobalSignInEndpoint
 */
class ReplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     ReplicationStatusSummaryList?: list<ReplicationStatusSummary>|null,
     *     SourceRegion?: string|null,
     *     GlobalSignInEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
