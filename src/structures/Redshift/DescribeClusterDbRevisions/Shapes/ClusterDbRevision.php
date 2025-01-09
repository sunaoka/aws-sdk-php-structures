<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterDbRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterIdentifier
 * @property string $CurrentDatabaseRevision
 * @property \Aws\Api\DateTimeResult $DatabaseRevisionReleaseDate
 * @property list<RevisionTarget> $RevisionTargets
 */
class ClusterDbRevision extends Shape
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     CurrentDatabaseRevision?: string,
     *     DatabaseRevisionReleaseDate?: \Aws\Api\DateTimeResult,
     *     RevisionTargets?: list<RevisionTarget>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
