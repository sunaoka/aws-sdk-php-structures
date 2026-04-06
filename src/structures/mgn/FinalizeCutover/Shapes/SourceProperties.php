<?php

namespace Sunaoka\Aws\Structures\mgn\FinalizeCutover\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CPU>|null $cpus
 * @property list<Disk>|null $disks
 * @property IdentificationHints|null $identificationHints
 * @property string|null $lastUpdatedDateTime
 * @property list<NetworkInterface>|null $networkInterfaces
 * @property OS|null $os
 * @property int<0, max>|null $ramBytes
 * @property string|null $recommendedInstanceType
 */
class SourceProperties extends Shape
{
    /**
     * @param array{
     *     cpus?: list<CPU>|null,
     *     disks?: list<Disk>|null,
     *     identificationHints?: IdentificationHints|null,
     *     lastUpdatedDateTime?: string|null,
     *     networkInterfaces?: list<NetworkInterface>|null,
     *     os?: OS|null,
     *     ramBytes?: int<0, max>|null,
     *     recommendedInstanceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
