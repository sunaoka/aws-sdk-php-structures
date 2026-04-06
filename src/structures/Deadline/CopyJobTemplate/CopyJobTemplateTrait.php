<?php

namespace Sunaoka\Aws\Structures\Deadline\CopyJobTemplate;

trait CopyJobTemplateTrait
{
    /**
     * @param CopyJobTemplateRequest $args
     * @return CopyJobTemplateResponse
     */
    public function copyJobTemplate(CopyJobTemplateRequest $args)
    {
        $result = parent::copyJobTemplate($args->toArray());
        return new CopyJobTemplateResponse($result->toArray());
    }
}
