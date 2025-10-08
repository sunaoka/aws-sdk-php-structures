<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribeRepository;

trait DescribeRepositoryTrait
{
    /**
     * @param DescribeRepositoryRequest $args
     * @return DescribeRepositoryResponse
     */
    public function describeRepository(DescribeRepositoryRequest $args)
    {
        $result = parent::describeRepository($args->toArray());
        return new DescribeRepositoryResponse($result->toArray());
    }
}
