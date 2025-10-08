<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteThemeAlias;

trait DeleteThemeAliasTrait
{
    /**
     * @param DeleteThemeAliasRequest $args
     * @return DeleteThemeAliasResponse
     */
    public function deleteThemeAlias(DeleteThemeAliasRequest $args)
    {
        $result = parent::deleteThemeAlias($args->toArray());
        return new DeleteThemeAliasResponse($result->toArray());
    }
}
