<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetHarvestJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property string $HarvestJobName
 */
class GetHarvestJobRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     OriginEndpointName: string,
     *     HarvestJobName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
