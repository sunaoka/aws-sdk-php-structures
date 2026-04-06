<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListStateTemplates;

trait ListStateTemplatesTrait
{
    /**
     * @param ListStateTemplatesRequest $args
     * @return ListStateTemplatesResponse
     */
    public function listStateTemplates(ListStateTemplatesRequest $args)
    {
        $result = parent::listStateTemplates($args->toArray());
        return new ListStateTemplatesResponse($result->toArray());
    }
}
