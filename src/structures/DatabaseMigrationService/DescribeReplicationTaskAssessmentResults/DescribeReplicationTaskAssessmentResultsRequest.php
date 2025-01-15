<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTaskAssessmentResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReplicationTaskArn
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeReplicationTaskAssessmentResultsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
