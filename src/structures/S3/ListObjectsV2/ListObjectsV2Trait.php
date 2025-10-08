<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectsV2;

trait ListObjectsV2Trait
{
    /**
     * @param ListObjectsV2Request $args
     * @return ListObjectsV2Response
     */
    public function listObjectsV2(ListObjectsV2Request $args)
    {
        $result = parent::listObjectsV2($args->toArray());
        return new ListObjectsV2Response($result->toArray());
    }
}
