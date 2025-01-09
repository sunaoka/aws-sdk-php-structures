<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceType
 * @property string $AvailabilityZone
 * @property NodeLogPublishingConfiguration $LogPublishingConfiguration
 * @property 'LevelDB'|'CouchDB' $StateDB
 */
class NodeConfiguration extends Shape
{
    /**
     * @param array{
     *     InstanceType: string,
     *     AvailabilityZone?: string,
     *     LogPublishingConfiguration?: NodeLogPublishingConfiguration,
     *     StateDB?: 'LevelDB'|'CouchDB'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
