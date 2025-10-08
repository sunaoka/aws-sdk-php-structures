<?php

namespace Sunaoka\Aws\Structures\Glue\GetPartitions;

trait GetPartitionsTrait
{
    /**
     * @param GetPartitionsRequest $args
     * @return GetPartitionsResponse
     */
    public function getPartitions(GetPartitionsRequest $args)
    {
        $result = parent::getPartitions($args->toArray());
        return new GetPartitionsResponse($result->toArray());
    }
}
