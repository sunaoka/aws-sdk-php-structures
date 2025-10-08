<?php

namespace Sunaoka\Aws\Structures\Ec2\GetFlowLogsIntegrationTemplate;

trait GetFlowLogsIntegrationTemplateTrait
{
    /**
     * @param GetFlowLogsIntegrationTemplateRequest $args
     * @return GetFlowLogsIntegrationTemplateResponse
     */
    public function getFlowLogsIntegrationTemplate(GetFlowLogsIntegrationTemplateRequest $args)
    {
        $result = parent::getFlowLogsIntegrationTemplate($args->toArray());
        return new GetFlowLogsIntegrationTemplateResponse($result->toArray());
    }
}
