<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateHarvestJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property string|null $Description
 * @property Shapes\HarvestedManifests $HarvestedManifests
 * @property Shapes\HarvesterScheduleConfiguration $ScheduleConfiguration
 * @property Shapes\Destination $Destination
 * @property string|null $ClientToken
 * @property string|null $HarvestJobName
 * @property array<string, string>|null $Tags
 */
class CreateHarvestJobRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     OriginEndpointName: string,
     *     Description?: string|null,
     *     HarvestedManifests: Shapes\HarvestedManifests,
     *     ScheduleConfiguration: Shapes\HarvesterScheduleConfiguration,
     *     Destination: Shapes\Destination,
     *     ClientToken?: string|null,
     *     HarvestJobName?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
