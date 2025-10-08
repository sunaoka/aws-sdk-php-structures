<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeCachediSCSIVolumes;

trait DescribeCachediSCSIVolumesTrait
{
    /**
     * @param DescribeCachediSCSIVolumesRequest $args
     * @return DescribeCachediSCSIVolumesResponse
     */
    public function describeCachediSCSIVolumes(DescribeCachediSCSIVolumesRequest $args)
    {
        $result = parent::describeCachediSCSIVolumes($args->toArray());
        return new DescribeCachediSCSIVolumesResponse($result->toArray());
    }
}
