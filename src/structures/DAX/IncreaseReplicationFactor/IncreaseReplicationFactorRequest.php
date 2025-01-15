<?php

namespace Sunaoka\Aws\Structures\DAX\IncreaseReplicationFactor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property int $NewReplicationFactor
 * @property list<string>|null $AvailabilityZones
 */
class IncreaseReplicationFactorRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     NewReplicationFactor: int,
     *     AvailabilityZones?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
