<?php

namespace Sunaoka\Aws\Structures\Iot\ListManagedJobTemplates;

trait ListManagedJobTemplatesTrait
{
    /**
     * @param ListManagedJobTemplatesRequest $args
     * @return ListManagedJobTemplatesResponse
     */
    public function listManagedJobTemplates(ListManagedJobTemplatesRequest $args)
    {
        $result = parent::listManagedJobTemplates($args->toArray());
        return new ListManagedJobTemplatesResponse($result->toArray());
    }
}
