<?php

namespace Sunaoka\Aws\Structures\mgn\ResumeReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CPU> $cpus
 * @property list<Disk> $disks
 * @property IdentificationHints $identificationHints
 * @property string $lastUpdatedDateTime
 * @property list<NetworkInterface> $networkInterfaces
 * @property OS $os
 * @property int $ramBytes
 * @property string $recommendedInstanceType
 */
class SourceProperties extends Shape
{
    /**
     * @param array{
     *     cpus?: list<CPU>,
     *     disks?: list<Disk>,
     *     identificationHints?: IdentificationHints,
     *     lastUpdatedDateTime?: string,
     *     networkInterfaces?: list<NetworkInterface>,
     *     os?: OS,
     *     ramBytes?: int,
     *     recommendedInstanceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
