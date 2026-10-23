<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ResumeConnector;

trait ResumeConnectorTrait
{
    /**
     * @param ResumeConnectorRequest $args
     * @return ResumeConnectorResponse
     */
    public function resumeConnector(ResumeConnectorRequest $args)
    {
        $result = parent::resumeConnector($args->toArray());
        return new ResumeConnectorResponse($result->toArray());
    }
}
