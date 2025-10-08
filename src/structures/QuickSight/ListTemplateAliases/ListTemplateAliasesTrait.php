<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTemplateAliases;

trait ListTemplateAliasesTrait
{
    /**
     * @param ListTemplateAliasesRequest $args
     * @return ListTemplateAliasesResponse
     */
    public function listTemplateAliases(ListTemplateAliasesRequest $args)
    {
        $result = parent::listTemplateAliases($args->toArray());
        return new ListTemplateAliasesResponse($result->toArray());
    }
}
