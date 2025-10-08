<?php

namespace Sunaoka\Aws\Structures\Schemas\SearchSchemas;

trait SearchSchemasTrait
{
    /**
     * @param SearchSchemasRequest $args
     * @return SearchSchemasResponse
     */
    public function searchSchemas(SearchSchemasRequest $args)
    {
        $result = parent::searchSchemas($args->toArray());
        return new SearchSchemasResponse($result->toArray());
    }
}
