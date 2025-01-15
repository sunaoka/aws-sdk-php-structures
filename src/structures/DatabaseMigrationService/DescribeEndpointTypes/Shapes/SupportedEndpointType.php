<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpointTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EngineName
 * @property bool|null $SupportsCDC
 * @property 'source'|'target'|null $EndpointType
 * @property string|null $ReplicationInstanceEngineMinimumVersion
 * @property string|null $EngineDisplayName
 */
class SupportedEndpointType extends Shape
{
    /**
     * @param array{
     *     EngineName?: string|null,
     *     SupportsCDC?: bool|null,
     *     EndpointType?: 'source'|'target'|null,
     *     ReplicationInstanceEngineMinimumVersion?: string|null,
     *     EngineDisplayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
