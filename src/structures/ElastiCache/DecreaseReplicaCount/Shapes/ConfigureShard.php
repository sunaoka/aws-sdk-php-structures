<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DecreaseReplicaCount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeGroupId
 * @property int $NewReplicaCount
 * @property list<string>|null $PreferredAvailabilityZones
 * @property list<string>|null $PreferredOutpostArns
 */
class ConfigureShard extends Shape
{
    /**
     * @param array{
     *     NodeGroupId: string,
     *     NewReplicaCount: int,
     *     PreferredAvailabilityZones?: list<string>|null,
     *     PreferredOutpostArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
