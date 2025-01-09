<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeNodeConfigurationOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'restore-cluster'|'recommend-node-config'|'resize-cluster' $ActionType
 * @property string $ClusterIdentifier
 * @property string $SnapshotIdentifier
 * @property string $SnapshotArn
 * @property string $OwnerAccount
 * @property list<Shapes\NodeConfigurationOptionsFilter> $Filters
 * @property string $Marker
 * @property int $MaxRecords
 */
class DescribeNodeConfigurationOptionsRequest extends Request
{
    /**
     * @param array{
     *     ActionType: 'restore-cluster'|'recommend-node-config'|'resize-cluster',
     *     ClusterIdentifier?: string,
     *     SnapshotIdentifier?: string,
     *     SnapshotArn?: string,
     *     OwnerAccount?: string,
     *     Filters?: list<Shapes\NodeConfigurationOptionsFilter>,
     *     Marker?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
