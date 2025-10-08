<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeStorediSCSIVolumes;

trait DescribeStorediSCSIVolumesTrait
{
    /**
     * @param DescribeStorediSCSIVolumesRequest $args
     * @return DescribeStorediSCSIVolumesResponse
     */
    public function describeStorediSCSIVolumes(DescribeStorediSCSIVolumesRequest $args)
    {
        $result = parent::describeStorediSCSIVolumes($args->toArray());
        return new DescribeStorediSCSIVolumesResponse($result->toArray());
    }
}
