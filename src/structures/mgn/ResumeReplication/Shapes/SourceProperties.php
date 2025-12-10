<?php

namespace Sunaoka\Aws\Structures\mgn\ResumeReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lastUpdatedDateTime
 * @property string|null $recommendedInstanceType
 * @property IdentificationHints|null $identificationHints
 * @property list<NetworkInterface>|null $networkInterfaces
 * @property list<Disk>|null $disks
 * @property list<CPU>|null $cpus
 * @property int<0, max>|null $ramBytes
 * @property OS|null $os
 */
class SourceProperties extends Shape
{
    /**
     * @param array{
     *     lastUpdatedDateTime?: string|null,
     *     recommendedInstanceType?: string|null,
     *     identificationHints?: IdentificationHints|null,
     *     networkInterfaces?: list<NetworkInterface>|null,
     *     disks?: list<Disk>|null,
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
