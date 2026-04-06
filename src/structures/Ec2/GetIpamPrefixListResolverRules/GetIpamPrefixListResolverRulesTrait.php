<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPrefixListResolverRules;

trait GetIpamPrefixListResolverRulesTrait
{
    /**
     * @param GetIpamPrefixListResolverRulesRequest $args
     * @return GetIpamPrefixListResolverRulesResponse
     */
    public function getIpamPrefixListResolverRules(GetIpamPrefixListResolverRulesRequest $args)
    {
        $result = parent::getIpamPrefixListResolverRules($args->toArray());
        return new GetIpamPrefixListResolverRulesResponse($result->toArray());
    }
}
