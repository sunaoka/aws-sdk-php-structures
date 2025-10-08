<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeRulesPackages;

trait DescribeRulesPackagesTrait
{
    /**
     * @param DescribeRulesPackagesRequest $args
     * @return DescribeRulesPackagesResponse
     */
    public function describeRulesPackages(DescribeRulesPackagesRequest $args)
    {
        $result = parent::describeRulesPackages($args->toArray());
        return new DescribeRulesPackagesResponse($result->toArray());
    }
}
