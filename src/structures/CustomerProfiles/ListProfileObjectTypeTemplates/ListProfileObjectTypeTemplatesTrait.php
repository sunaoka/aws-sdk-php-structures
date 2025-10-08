<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjectTypeTemplates;

trait ListProfileObjectTypeTemplatesTrait
{
    /**
     * @param ListProfileObjectTypeTemplatesRequest $args
     * @return ListProfileObjectTypeTemplatesResponse
     */
    public function listProfileObjectTypeTemplates(ListProfileObjectTypeTemplatesRequest $args)
    {
        $result = parent::listProfileObjectTypeTemplates($args->toArray());
        return new ListProfileObjectTypeTemplatesResponse($result->toArray());
    }
}
