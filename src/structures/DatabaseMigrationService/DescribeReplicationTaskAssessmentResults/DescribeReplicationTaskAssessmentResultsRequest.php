<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTaskAssessmentResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeReplicationTaskAssessmentResultsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
