<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeNodeConfigurationOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'restore-cluster'|'recommend-node-config'|'resize-cluster' $ActionType
 * @property string|null $ClusterIdentifier
 * @property string|null $SnapshotIdentifier
 * @property string|null $SnapshotArn
 * @property string|null $OwnerAccount
 * @property list<Shapes\NodeConfigurationOptionsFilter>|null $Filters
 * @property string|null $Marker
 * @property int|null $MaxRecords
 */
class DescribeNodeConfigurationOptionsRequest extends Request
{
    /**
     * @param array{
     *     ActionType: 'restore-cluster'|'recommend-node-config'|'resize-cluster',
     *     ClusterIdentifier?: string|null,
     *     SnapshotIdentifier?: string|null,
     *     SnapshotArn?: string|null,
     *     OwnerAccount?: string|null,
     *     Filters?: list<Shapes\NodeConfigurationOptionsFilter>|null,
     *     Marker?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
