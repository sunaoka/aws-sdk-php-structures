<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MySQL'|'PostgreSQL'|null $Type
 * @property string|null $Endpoint
 * @property int<0, 65535>|null $Port
 * @property 'Disabled'|'Enabled'|null $SSLMode
 * @property DatabaseList|null $Databases
 * @property DatabaseTableList|null $Tables
 * @property DatabaseColumnList|null $Columns
 * @property list<string>|null $SurrogateKeys
 * @property string|null $SnapshotWatermarkTable
 * @property list<DatabaseSnapshotInfo>|null $SnapshotInfo
 * @property DatabaseSourceAuthenticationConfiguration|null $DatabaseSourceAuthenticationConfiguration
 * @property DatabaseSourceVPCConfiguration|null $DatabaseSourceVPCConfiguration
 */
class DatabaseSourceDescription extends Shape
{
    /**
     * @param array{
     *     Type?: 'MySQL'|'PostgreSQL'|null,
     *     Endpoint?: string|null,
     *     Port?: int<0, 65535>|null,
     *     SSLMode?: 'Disabled'|'Enabled'|null,
     *     Databases?: DatabaseList|null,
     *     Tables?: DatabaseTableList|null,
     *     Columns?: DatabaseColumnList|null,
     *     SurrogateKeys?: list<string>|null,
     *     SnapshotWatermarkTable?: string|null,
     *     SnapshotInfo?: list<DatabaseSnapshotInfo>|null,
     *     DatabaseSourceAuthenticationConfiguration?: DatabaseSourceAuthenticationConfiguration|null,
     *     DatabaseSourceVPCConfiguration?: DatabaseSourceVPCConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
