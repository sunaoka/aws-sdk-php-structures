<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lastUpdatedDateTime
 * @property IdentificationHints|null $identificationHints
 * @property list<NetworkInterface>|null $networkInterfaces
 * @property list<RecoveryInstanceDisk>|null $disks
 * @property list<CPU>|null $cpus
 * @property int<0, max>|null $ramBytes
 * @property OS|null $os
 */
class RecoveryInstanceProperties extends Shape
{
    /**
     * @param array{
     *     lastUpdatedDateTime?: string|null,
     *     identificationHints?: IdentificationHints|null,
     *     networkInterfaces?: list<NetworkInterface>|null,
     *     disks?: list<RecoveryInstanceDisk>|null,
     *     cpus?: list<CPU>|null,
     *     ramBytes?: int<0, max>|null,
     *     os?: OS|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
