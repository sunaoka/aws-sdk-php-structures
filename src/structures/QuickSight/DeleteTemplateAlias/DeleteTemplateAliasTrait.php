<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteTemplateAlias;

trait DeleteTemplateAliasTrait
{
    /**
     * @param DeleteTemplateAliasRequest $args
     * @return DeleteTemplateAliasResponse
     */
    public function deleteTemplateAlias(DeleteTemplateAliasRequest $args)
    {
        $result = parent::deleteTemplateAlias($args->toArray());
        return new DeleteTemplateAliasResponse($result->toArray());
    }
}
