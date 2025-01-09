<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateHarvestJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property string $Description
 * @property Shapes\HarvestedManifests $HarvestedManifests
 * @property Shapes\HarvesterScheduleConfiguration $ScheduleConfiguration
 * @property Shapes\Destination $Destination
 * @property string $ClientToken
 * @property string $HarvestJobName
 * @property array<string, string> $Tags
 */
class CreateHarvestJobRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     OriginEndpointName: string,
     *     Description?: string,
     *     HarvestedManifests: Shapes\HarvestedManifests,
     *     ScheduleConfiguration: Shapes\HarvesterScheduleConfiguration,
     *     Destination: Shapes\Destination,
     *     ClientToken?: string,
     *     HarvestJobName?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
