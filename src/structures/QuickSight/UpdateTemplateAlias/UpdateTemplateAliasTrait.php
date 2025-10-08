<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplateAlias;

trait UpdateTemplateAliasTrait
{
    /**
     * @param UpdateTemplateAliasRequest $args
     * @return UpdateTemplateAliasResponse
     */
    public function updateTemplateAlias(UpdateTemplateAliasRequest $args)
    {
        $result = parent::updateTemplateAlias($args->toArray());
        return new UpdateTemplateAliasResponse($result->toArray());
    }
}
