<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplates;

trait ListTemplatesTrait
{
    /**
     * @param ListTemplatesRequest $args
     * @return ListTemplatesResponse
     */
    public function listTemplates(ListTemplatesRequest $args)
    {
        $result = parent::listTemplates($args->toArray());
        return new ListTemplatesResponse($result->toArray());
    }
}
