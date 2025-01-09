<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DecreaseReplicaCount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeGroupId
 * @property int $NewReplicaCount
 * @property list<string> $PreferredAvailabilityZones
 * @property list<string> $PreferredOutpostArns
 */
class ConfigureShard extends Shape
{
    /**
     * @param array{
     *     NodeGroupId: string,
     *     NewReplicaCount: int,
     *     PreferredAvailabilityZones?: list<string>,
     *     PreferredOutpostArns?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
