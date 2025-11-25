<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZonesByName\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $CallerReference
 * @property HostedZoneConfig|null $Config
 * @property int|null $ResourceRecordSetCount
 * @property LinkedService|null $LinkedService
 * @property HostedZoneFeatures|null $Features
 */
class HostedZone extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     CallerReference: string,
     *     Config?: HostedZoneConfig|null,
     *     ResourceRecordSetCount?: int|null,
     *     LinkedService?: LinkedService|null,
     *     Features?: HostedZoneFeatures|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
