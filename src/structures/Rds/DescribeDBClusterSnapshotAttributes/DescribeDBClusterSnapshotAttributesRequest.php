<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterSnapshotAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterSnapshotIdentifier
 */
class DescribeDBClusterSnapshotAttributesRequest extends Request
{
    /**
     * @param array{DBClusterSnapshotIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
