<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumesModifications;

trait DescribeVolumesModificationsTrait
{
    /**
     * @param DescribeVolumesModificationsRequest $args
     * @return DescribeVolumesModificationsResponse
     */
    public function describeVolumesModifications(DescribeVolumesModificationsRequest $args)
    {
        $result = parent::describeVolumesModifications($args->toArray());
        return new DescribeVolumesModificationsResponse($result->toArray());
    }
}
