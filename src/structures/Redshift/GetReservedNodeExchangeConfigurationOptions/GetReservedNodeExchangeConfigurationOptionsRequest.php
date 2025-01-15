<?php

namespace Sunaoka\Aws\Structures\Redshift\GetReservedNodeExchangeConfigurationOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'restore-cluster'|'resize-cluster' $ActionType
 * @property string|null $ClusterIdentifier
 * @property string|null $SnapshotIdentifier
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class GetReservedNodeExchangeConfigurationOptionsRequest extends Request
{
    /**
     * @param array{
     *     ActionType: 'restore-cluster'|'resize-cluster',
     *     ClusterIdentifier?: string|null,
     *     SnapshotIdentifier?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
