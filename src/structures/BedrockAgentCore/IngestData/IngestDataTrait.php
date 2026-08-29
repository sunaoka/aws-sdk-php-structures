<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\IngestData;

trait IngestDataTrait
{
    /**
     * @param IngestDataRequest $args
     * @return IngestDataResponse
     */
    public function ingestData(IngestDataRequest $args)
    {
        $result = parent::ingestData($args->toArray());
        return new IngestDataResponse($result->toArray());
    }
}
