<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CPU>|null $cpus
 * @property list<RecoveryInstanceDisk>|null $disks
 * @property IdentificationHints|null $identificationHints
 * @property string|null $lastUpdatedDateTime
 * @property list<NetworkInterface>|null $networkInterfaces
 * @property OS|null $os
 * @property int<0, max>|null $ramBytes
 */
class RecoveryInstanceProperties extends Shape
{
    /**
     * @param array{
     *     cpus?: list<CPU>|null,
     *     disks?: list<RecoveryInstanceDisk>|null,
     *     identificationHints?: IdentificationHints|null,
     *     lastUpdatedDateTime?: string|null,
     *     networkInterfaces?: list<NetworkInterface>|null,
     *     os?: OS|null,
     *     ramBytes?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
