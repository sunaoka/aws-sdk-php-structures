<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateThemeAlias;

trait CreateThemeAliasTrait
{
    /**
     * @param CreateThemeAliasRequest $args
     * @return CreateThemeAliasResponse
     */
    public function createThemeAlias(CreateThemeAliasRequest $args)
    {
        $result = parent::createThemeAlias($args->toArray());
        return new CreateThemeAliasResponse($result->toArray());
    }
}
