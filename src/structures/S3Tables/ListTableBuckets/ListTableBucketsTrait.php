<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListTableBuckets;

trait ListTableBucketsTrait
{
    /**
     * @param ListTableBucketsRequest $args
     * @return ListTableBucketsResponse
     */
    public function listTableBuckets(ListTableBucketsRequest $args)
    {
        $result = parent::listTableBuckets($args->toArray());
        return new ListTableBucketsResponse($result->toArray());
    }
}
