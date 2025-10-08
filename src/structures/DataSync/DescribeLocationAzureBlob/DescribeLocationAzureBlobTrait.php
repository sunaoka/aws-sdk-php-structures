<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationAzureBlob;

trait DescribeLocationAzureBlobTrait
{
    /**
     * @param DescribeLocationAzureBlobRequest $args
     * @return DescribeLocationAzureBlobResponse
     */
    public function describeLocationAzureBlob(DescribeLocationAzureBlobRequest $args)
    {
        $result = parent::describeLocationAzureBlob($args->toArray());
        return new DescribeLocationAzureBlobResponse($result->toArray());
    }
}
