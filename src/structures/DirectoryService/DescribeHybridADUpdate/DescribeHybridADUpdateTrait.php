<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeHybridADUpdate;

trait DescribeHybridADUpdateTrait
{
    /**
     * @param DescribeHybridADUpdateRequest $args
     * @return DescribeHybridADUpdateResponse
     */
    public function describeHybridADUpdate(DescribeHybridADUpdateRequest $args)
    {
        $result = parent::describeHybridADUpdate($args->toArray());
        return new DescribeHybridADUpdateResponse($result->toArray());
    }
}
