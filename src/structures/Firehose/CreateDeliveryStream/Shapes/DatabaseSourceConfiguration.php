<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MySQL'|'PostgreSQL' $Type
 * @property string $Endpoint
 * @property int $Port
 * @property 'Disabled'|'Enabled' $SSLMode
 * @property DatabaseList $Databases
 * @property DatabaseTableList $Tables
 * @property DatabaseColumnList $Columns
 * @property list<string> $SurrogateKeys
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
     *     Port: int,
     *     SSLMode?: 'Disabled'|'Enabled',
     *     Databases: DatabaseList,
     *     Tables: DatabaseTableList,
     *     Columns?: DatabaseColumnList,
     *     SurrogateKeys?: list<string>,
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
