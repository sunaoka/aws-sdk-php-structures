<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterDbRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatabaseRevision
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $DatabaseRevisionReleaseDate
 */
class RevisionTarget extends Shape
{
    /**
     * @param array{
     *     DatabaseRevision?: string|null,
     *     Description?: string|null,
     *     DatabaseRevisionReleaseDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
