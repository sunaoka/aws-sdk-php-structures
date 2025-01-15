<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MySQL'|'PostgreSQL' $Type
 * @property string $Endpoint
 * @property int<0, 65535> $Port
 * @property 'Disabled'|'Enabled'|null $SSLMode
 * @property DatabaseList $Databases
 * @property DatabaseTableList $Tables
 * @property DatabaseColumnList|null $Columns
 * @property list<string>|null $SurrogateKeys
 * @property string $SnapshotWatermarkTable
 * @property DatabaseSourceAuthenticationConfiguration $DatabaseSourceAuthenticationConfiguration
 * @property DatabaseSourceVPCConfiguration $DatabaseSourceVPCConfiguration
 */
class DatabaseSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     Type: 'MySQL'|'PostgreSQL',
     *     Endpoint: string,
     *     Port: int<0, 65535>,
     *     SSLMode?: 'Disabled'|'Enabled'|null,
     *     Databases: DatabaseList,
     *     Tables: DatabaseTableList,
     *     Columns?: DatabaseColumnList|null,
     *     SurrogateKeys?: list<string>|null,
     *     SnapshotWatermarkTable: string,
     *     DatabaseSourceAuthenticationConfiguration: DatabaseSourceAuthenticationConfiguration,
     *     DatabaseSourceVPCConfiguration: DatabaseSourceVPCConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
