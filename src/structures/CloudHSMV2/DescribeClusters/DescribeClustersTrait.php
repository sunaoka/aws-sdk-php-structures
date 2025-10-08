<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DescribeClusters;

trait DescribeClustersTrait
{
    /**
     * @param DescribeClustersRequest $args
     * @return DescribeClustersResponse
     */
    public function describeClusters(DescribeClustersRequest $args)
    {
        $result = parent::describeClusters($args->toArray());
        return new DescribeClustersResponse($result->toArray());
    }
}
