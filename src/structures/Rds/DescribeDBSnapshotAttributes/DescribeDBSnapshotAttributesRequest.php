<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSnapshotAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSnapshotIdentifier
 */
class DescribeDBSnapshotAttributesRequest extends Request
{
    /**
     * @param array{DBSnapshotIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
