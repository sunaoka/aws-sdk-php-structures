<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsLocation $awsLocation
 * @property GlueConnection $glueConnection
 * @property string $glueConnectionName
 * @property string $host
 * @property int $port
 * @property 'ATHENA'|'GLUE_INTERACTIVE_SESSION'|'HTTPS'|'JDBC'|'LIVY'|'ODBC'|'PRISM' $protocol
 * @property string $stage
 */
class PhysicalEndpoint extends Shape
{
    /**
     * @param array{
     *     awsLocation?: AwsLocation,
     *     glueConnection?: GlueConnection,
     *     glueConnectionName?: string,
     *     host?: string,
     *     port?: int,
     *     protocol?: 'ATHENA'|'GLUE_INTERACTIVE_SESSION'|'HTTPS'|'JDBC'|'LIVY'|'ODBC'|'PRISM',
     *     stage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
