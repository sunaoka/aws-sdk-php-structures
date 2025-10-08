<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplateAlias;

trait CreateTemplateAliasTrait
{
    /**
     * @param CreateTemplateAliasRequest $args
     * @return CreateTemplateAliasResponse
     */
    public function createTemplateAlias(CreateTemplateAliasRequest $args)
    {
        $result = parent::createTemplateAlias($args->toArray());
        return new CreateTemplateAliasResponse($result->toArray());
    }
}
