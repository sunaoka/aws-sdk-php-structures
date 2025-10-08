<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeRepositories;

trait DescribeRepositoriesTrait
{
    /**
     * @param DescribeRepositoriesRequest $args
     * @return DescribeRepositoriesResponse
     */
    public function describeRepositories(DescribeRepositoriesRequest $args)
    {
        $result = parent::describeRepositories($args->toArray());
        return new DescribeRepositoriesResponse($result->toArray());
    }
}
