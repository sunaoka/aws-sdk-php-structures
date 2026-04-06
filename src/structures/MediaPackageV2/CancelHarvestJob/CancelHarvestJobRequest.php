<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CancelHarvestJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property string $HarvestJobName
 * @property string|null $ETag
 */
class CancelHarvestJobRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     OriginEndpointName: string,
     *     HarvestJobName: string,
     *     ETag?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
