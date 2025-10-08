<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeArchive;

trait DescribeArchiveTrait
{
    /**
     * @param DescribeArchiveRequest $args
     * @return DescribeArchiveResponse
     */
    public function describeArchive(DescribeArchiveRequest $args)
    {
        $result = parent::describeArchive($args->toArray());
        return new DescribeArchiveResponse($result->toArray());
    }
}
