<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterDbRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseRevision
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $DatabaseRevisionReleaseDate
 */
class RevisionTarget extends Shape
{
    /**
     * @param array{
     *     DatabaseRevision?: string,
     *     Description?: string,
     *     DatabaseRevisionReleaseDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
