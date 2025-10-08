<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeUploadBuffer;

trait DescribeUploadBufferTrait
{
    /**
     * @param DescribeUploadBufferRequest $args
     * @return DescribeUploadBufferResponse
     */
    public function describeUploadBuffer(DescribeUploadBufferRequest $args)
    {
        $result = parent::describeUploadBuffer($args->toArray());
        return new DescribeUploadBufferResponse($result->toArray());
    }
}
