<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFolder;

trait DescribeFolderTrait
{
    /**
     * @param DescribeFolderRequest $args
     * @return DescribeFolderResponse
     */
    public function describeFolder(DescribeFolderRequest $args)
    {
        $result = parent::describeFolder($args->toArray());
        return new DescribeFolderResponse($result->toArray());
    }
}
