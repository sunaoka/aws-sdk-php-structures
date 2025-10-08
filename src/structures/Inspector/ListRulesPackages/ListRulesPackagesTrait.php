<?php

namespace Sunaoka\Aws\Structures\Inspector\ListRulesPackages;

trait ListRulesPackagesTrait
{
    /**
     * @param ListRulesPackagesRequest $args
     * @return ListRulesPackagesResponse
     */
    public function listRulesPackages(ListRulesPackagesRequest $args)
    {
        $result = parent::listRulesPackages($args->toArray());
        return new ListRulesPackagesResponse($result->toArray());
    }
}
