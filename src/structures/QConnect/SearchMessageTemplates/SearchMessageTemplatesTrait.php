<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates;

trait SearchMessageTemplatesTrait
{
    /**
     * @param SearchMessageTemplatesRequest $args
     * @return SearchMessageTemplatesResponse
     */
    public function searchMessageTemplates(SearchMessageTemplatesRequest $args)
    {
        $result = parent::searchMessageTemplates($args->toArray());
        return new SearchMessageTemplatesResponse($result->toArray());
    }
}
