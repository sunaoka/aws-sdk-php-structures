<?php

namespace Sunaoka\Aws\Structures\SesV2\ListEmailTemplates;

trait ListEmailTemplatesTrait
{
    /**
     * @param ListEmailTemplatesRequest $args
     * @return ListEmailTemplatesResponse
     */
    public function listEmailTemplates(ListEmailTemplatesRequest $args)
    {
        $result = parent::listEmailTemplates($args->toArray());
        return new ListEmailTemplatesResponse($result->toArray());
    }
}
