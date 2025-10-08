<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeUpdateDirectory;

trait DescribeUpdateDirectoryTrait
{
    /**
     * @param DescribeUpdateDirectoryRequest $args
     * @return DescribeUpdateDirectoryResponse
     */
    public function describeUpdateDirectory(DescribeUpdateDirectoryRequest $args)
    {
        $result = parent::describeUpdateDirectory($args->toArray());
        return new DescribeUpdateDirectoryResponse($result->toArray());
    }
}
