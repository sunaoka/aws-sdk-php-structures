<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpointTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EngineName
 * @property bool $SupportsCDC
 * @property 'source'|'target' $EndpointType
 * @property string $ReplicationInstanceEngineMinimumVersion
 * @property string $EngineDisplayName
 */
class SupportedEndpointType extends Shape
{
    /**
     * @param array{
     *     EngineName?: string,
     *     SupportsCDC?: bool,
     *     EndpointType?: 'source'|'target',
     *     ReplicationInstanceEngineMinimumVersion?: string,
     *     EngineDisplayName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
