<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceType
 * @property string|null $AvailabilityZone
 * @property NodeLogPublishingConfiguration|null $LogPublishingConfiguration
 * @property 'LevelDB'|'CouchDB'|null $StateDB
 */
class NodeConfiguration extends Shape
{
    /**
     * @param array{
     *     InstanceType: string,
     *     AvailabilityZone?: string|null,
     *     LogPublishingConfiguration?: NodeLogPublishingConfiguration|null,
     *     StateDB?: 'LevelDB'|'CouchDB'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
