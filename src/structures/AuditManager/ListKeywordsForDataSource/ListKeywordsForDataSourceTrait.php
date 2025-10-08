<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListKeywordsForDataSource;

trait ListKeywordsForDataSourceTrait
{
    /**
     * @param ListKeywordsForDataSourceRequest $args
     * @return ListKeywordsForDataSourceResponse
     */
    public function listKeywordsForDataSource(ListKeywordsForDataSourceRequest $args)
    {
        $result = parent::listKeywordsForDataSource($args->toArray());
        return new ListKeywordsForDataSourceResponse($result->toArray());
    }
}
