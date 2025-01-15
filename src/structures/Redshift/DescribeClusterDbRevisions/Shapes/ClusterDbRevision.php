<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterDbRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $CurrentDatabaseRevision
 * @property \Aws\Api\DateTimeResult|null $DatabaseRevisionReleaseDate
 * @property list<RevisionTarget>|null $RevisionTargets
 */
class ClusterDbRevision extends Shape
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     CurrentDatabaseRevision?: string|null,
     *     DatabaseRevisionReleaseDate?: \Aws\Api\DateTimeResult|null,
     *     RevisionTargets?: list<RevisionTarget>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
