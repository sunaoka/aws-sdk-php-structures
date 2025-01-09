<?php

namespace Sunaoka\Aws\Structures\Redshift\GetReservedNodeExchangeConfigurationOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'restore-cluster'|'resize-cluster' $ActionType
 * @property string $ClusterIdentifier
 * @property string $SnapshotIdentifier
 * @property int $MaxRecords
 * @property string $Marker
 */
class GetReservedNodeExchangeConfigurationOptionsRequest extends Request
{
    /**
     * @param array{
     *     ActionType: 'restore-cluster'|'resize-cluster',
     *     ClusterIdentifier?: string,
     *     SnapshotIdentifier?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
