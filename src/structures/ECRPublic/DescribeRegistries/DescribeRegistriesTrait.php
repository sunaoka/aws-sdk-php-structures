<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeRegistries;

trait DescribeRegistriesTrait
{
    /**
     * @param DescribeRegistriesRequest $args
     * @return DescribeRegistriesResponse
     */
    public function describeRegistries(DescribeRegistriesRequest $args)
    {
        $result = parent::describeRegistries($args->toArray());
        return new DescribeRegistriesResponse($result->toArray());
    }
}
