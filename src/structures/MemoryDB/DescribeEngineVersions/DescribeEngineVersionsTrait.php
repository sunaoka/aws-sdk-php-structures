<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeEngineVersions;

trait DescribeEngineVersionsTrait
{
    /**
     * @param DescribeEngineVersionsRequest $args
     * @return DescribeEngineVersionsResponse
     */
    public function describeEngineVersions(DescribeEngineVersionsRequest $args)
    {
        $result = parent::describeEngineVersions($args->toArray());
        return new DescribeEngineVersionsResponse($result->toArray());
    }
}
