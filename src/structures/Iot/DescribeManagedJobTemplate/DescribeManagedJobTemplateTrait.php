<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeManagedJobTemplate;

trait DescribeManagedJobTemplateTrait
{
    /**
     * @param DescribeManagedJobTemplateRequest $args
     * @return DescribeManagedJobTemplateResponse
     */
    public function describeManagedJobTemplate(DescribeManagedJobTemplateRequest $args)
    {
        $result = parent::describeManagedJobTemplate($args->toArray());
        return new DescribeManagedJobTemplateResponse($result->toArray());
    }
}
