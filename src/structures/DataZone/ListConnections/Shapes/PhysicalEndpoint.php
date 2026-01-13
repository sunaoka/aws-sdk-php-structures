<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsLocation|null $awsLocation
 * @property string|null $glueConnectionName
 * @property GlueConnection|null $glueConnection
 * @property bool|null $enableTrustedIdentityPropagation
 * @property string|null $host
 * @property int|null $port
 * @property 'ATHENA'|'GLUE_INTERACTIVE_SESSION'|'HTTPS'|'JDBC'|'LIVY'|'ODBC'|'PRISM'|null $protocol
 * @property string|null $stage
 */
class PhysicalEndpoint extends Shape
{
    /**
     * @param array{
     *     awsLocation?: AwsLocation|null,
     *     glueConnectionName?: string|null,
     *     glueConnection?: GlueConnection|null,
     *     enableTrustedIdentityPropagation?: bool|null,
     *     host?: string|null,
     *     port?: int|null,
     *     protocol?: 'ATHENA'|'GLUE_INTERACTIVE_SESSION'|'HTTPS'|'JDBC'|'LIVY'|'ODBC'|'PRISM'|null,
     *     stage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
