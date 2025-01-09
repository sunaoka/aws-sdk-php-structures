<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MySQL'|'PostgreSQL' $Type
 * @property string $Endpoint
 * @property int<0, 65535> $Port
 * @property 'Disabled'|'Enabled' $SSLMode
 * @property DatabaseList $Databases
 * @property DatabaseTableList $Tables
 * @property DatabaseColumnList $Columns
 * @property list<string> $SurrogateKeys
 * @property string $SnapshotWatermarkTable
 * @property list<DatabaseSnapshotInfo> $SnapshotInfo
 * @property DatabaseSourceAuthenticationConfiguration $DatabaseSourceAuthenticationConfiguration
 * @property DatabaseSourceVPCConfiguration $DatabaseSourceVPCConfiguration
 */
class DatabaseSourceDescription extends Shape
{
    /**
     * @param array{
     *     Type?: 'MySQL'|'PostgreSQL',
     *     Endpoint?: string,
     *     Port?: int<0, 65535>,
     *     SSLMode?: 'Disabled'|'Enabled',
     *     Databases?: DatabaseList,
     *     Tables?: DatabaseTableList,
     *     Columns?: DatabaseColumnList,
     *     SurrogateKeys?: list<string>,
     *     SnapshotWatermarkTable?: string,
     *     SnapshotInfo?: list<DatabaseSnapshotInfo>,
     *     DatabaseSourceAuthenticationConfiguration?: DatabaseSourceAuthenticationConfiguration,
     *     DatabaseSourceVPCConfiguration?: DatabaseSourceVPCConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
