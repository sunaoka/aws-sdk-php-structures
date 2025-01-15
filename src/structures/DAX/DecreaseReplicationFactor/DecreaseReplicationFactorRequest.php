<?php

namespace Sunaoka\Aws\Structures\DAX\DecreaseReplicationFactor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property int $NewReplicationFactor
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $NodeIdsToRemove
 */
class DecreaseReplicationFactorRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     NewReplicationFactor: int,
     *     AvailabilityZones?: list<string>|null,
     *     NodeIdsToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
