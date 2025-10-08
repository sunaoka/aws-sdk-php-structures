<?php

namespace Sunaoka\Aws\Structures\drs\ExportSourceNetworkCfnTemplate;

trait ExportSourceNetworkCfnTemplateTrait
{
    /**
     * @param ExportSourceNetworkCfnTemplateRequest $args
     * @return ExportSourceNetworkCfnTemplateResponse
     */
    public function exportSourceNetworkCfnTemplate(ExportSourceNetworkCfnTemplateRequest $args)
    {
        $result = parent::exportSourceNetworkCfnTemplate($args->toArray());
        return new ExportSourceNetworkCfnTemplateResponse($result->toArray());
    }
}
