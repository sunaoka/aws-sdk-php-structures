<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListThemeAliases;

trait ListThemeAliasesTrait
{
    /**
     * @param ListThemeAliasesRequest $args
     * @return ListThemeAliasesResponse
     */
    public function listThemeAliases(ListThemeAliasesRequest $args)
    {
        $result = parent::listThemeAliases($args->toArray());
        return new ListThemeAliasesResponse($result->toArray());
    }
}
