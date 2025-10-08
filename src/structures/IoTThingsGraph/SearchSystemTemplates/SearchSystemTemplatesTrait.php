<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchSystemTemplates;

trait SearchSystemTemplatesTrait
{
    /**
     * @param SearchSystemTemplatesRequest $args
     * @return SearchSystemTemplatesResponse
     */
    public function searchSystemTemplates(SearchSystemTemplatesRequest $args)
    {
        $result = parent::searchSystemTemplates($args->toArray());
        return new SearchSystemTemplatesResponse($result->toArray());
    }
}
