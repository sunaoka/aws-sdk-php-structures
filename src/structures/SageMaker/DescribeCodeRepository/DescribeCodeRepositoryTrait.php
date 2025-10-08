<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCodeRepository;

trait DescribeCodeRepositoryTrait
{
    /**
     * @param DescribeCodeRepositoryRequest $args
     * @return DescribeCodeRepositoryResponse
     */
    public function describeCodeRepository(DescribeCodeRepositoryRequest $args)
    {
        $result = parent::describeCodeRepository($args->toArray());
        return new DescribeCodeRepositoryResponse($result->toArray());
    }
}
