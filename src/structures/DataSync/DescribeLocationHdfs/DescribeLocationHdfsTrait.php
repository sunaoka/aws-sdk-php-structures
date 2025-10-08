<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationHdfs;

trait DescribeLocationHdfsTrait
{
    /**
     * @param DescribeLocationHdfsRequest $args
     * @return DescribeLocationHdfsResponse
     */
    public function describeLocationHdfs(DescribeLocationHdfsRequest $args)
    {
        $result = parent::describeLocationHdfs($args->toArray());
        return new DescribeLocationHdfsResponse($result->toArray());
    }
}
