<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeSnapshotCopyGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SnapshotCopyGrantName
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property list<string>|null $TagKeys
 * @property list<string>|null $TagValues
 */
class DescribeSnapshotCopyGrantsRequest extends Request
{
    /**
     * @param array{
     *     SnapshotCopyGrantName?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     TagKeys?: list<string>|null,
     *     TagValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
