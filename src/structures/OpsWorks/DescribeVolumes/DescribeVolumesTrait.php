<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeVolumes;

trait DescribeVolumesTrait
{
    /**
     * @param DescribeVolumesRequest $args
     * @return DescribeVolumesResponse
     */
    public function describeVolumes(DescribeVolumesRequest $args)
    {
        $result = parent::describeVolumes($args->toArray());
        return new DescribeVolumesResponse($result->toArray());
    }
}
