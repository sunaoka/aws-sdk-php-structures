<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHostedZoneComment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $CallerReference
 * @property HostedZoneConfig $Config
 * @property int $ResourceRecordSetCount
 * @property LinkedService $LinkedService
 */
class HostedZone extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     CallerReference: string,
     *     Config?: HostedZoneConfig,
     *     ResourceRecordSetCount?: int,
     *     LinkedService?: LinkedService
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
