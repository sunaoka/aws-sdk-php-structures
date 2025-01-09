<?php

namespace Sunaoka\Aws\Structures\DAX\DecreaseReplicationFactor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property int $NewReplicationFactor
 * @property list<string> $AvailabilityZones
 * @property list<string> $NodeIdsToRemove
 */
class DecreaseReplicationFactorRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     NewReplicationFactor: int,
     *     AvailabilityZones?: list<string>,
     *     NodeIdsToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
