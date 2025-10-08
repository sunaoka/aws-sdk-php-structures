<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeModelVersion;

trait DescribeModelVersionTrait
{
    /**
     * @param DescribeModelVersionRequest $args
     * @return DescribeModelVersionResponse
     */
    public function describeModelVersion(DescribeModelVersionRequest $args)
    {
        $result = parent::describeModelVersion($args->toArray());
        return new DescribeModelVersionResponse($result->toArray());
    }
}
