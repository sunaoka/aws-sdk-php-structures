<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateThemeAlias;

trait UpdateThemeAliasTrait
{
    /**
     * @param UpdateThemeAliasRequest $args
     * @return UpdateThemeAliasResponse
     */
    public function updateThemeAlias(UpdateThemeAliasRequest $args)
    {
        $result = parent::updateThemeAlias($args->toArray());
        return new UpdateThemeAliasResponse($result->toArray());
    }
}
