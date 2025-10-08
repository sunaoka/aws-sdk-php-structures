<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeFolderContents;

trait DescribeFolderContentsTrait
{
    /**
     * @param DescribeFolderContentsRequest $args
     * @return DescribeFolderContentsResponse
     */
    public function describeFolderContents(DescribeFolderContentsRequest $args)
    {
        $result = parent::describeFolderContents($args->toArray());
        return new DescribeFolderContentsResponse($result->toArray());
    }
}
