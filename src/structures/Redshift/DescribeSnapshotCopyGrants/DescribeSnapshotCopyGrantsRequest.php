<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeSnapshotCopyGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotCopyGrantName
 * @property int $MaxRecords
 * @property string $Marker
 * @property list<string> $TagKeys
 * @property list<string> $TagValues
 */
class DescribeSnapshotCopyGrantsRequest extends Request
{
    /**
     * @param array{
     *     SnapshotCopyGrantName?: string,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     TagKeys?: list<string>,
     *     TagValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
