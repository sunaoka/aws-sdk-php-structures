<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CPU> $cpus
 * @property list<RecoveryInstanceDisk> $disks
 * @property IdentificationHints $identificationHints
 * @property string $lastUpdatedDateTime
 * @property list<NetworkInterface> $networkInterfaces
 * @property OS $os
 * @property int<0, max> $ramBytes
 */
class RecoveryInstanceProperties extends Shape
{
    /**
     * @param array{
     *     cpus?: list<CPU>,
     *     disks?: list<RecoveryInstanceDisk>,
     *     identificationHints?: IdentificationHints,
     *     lastUpdatedDateTime?: string,
     *     networkInterfaces?: list<NetworkInterface>,
     *     os?: OS,
     *     ramBytes?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
