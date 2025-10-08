<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchFlowTemplates;

trait SearchFlowTemplatesTrait
{
    /**
     * @param SearchFlowTemplatesRequest $args
     * @return SearchFlowTemplatesResponse
     */
    public function searchFlowTemplates(SearchFlowTemplatesRequest $args)
    {
        $result = parent::searchFlowTemplates($args->toArray());
        return new SearchFlowTemplatesResponse($result->toArray());
    }
}
