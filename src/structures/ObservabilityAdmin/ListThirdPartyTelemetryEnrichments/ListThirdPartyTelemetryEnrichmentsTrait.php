<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListThirdPartyTelemetryEnrichments;

trait ListThirdPartyTelemetryEnrichmentsTrait
{
    /**
     * @param ListThirdPartyTelemetryEnrichmentsRequest $args
     * @return ListThirdPartyTelemetryEnrichmentsResponse
     */
    public function listThirdPartyTelemetryEnrichments(ListThirdPartyTelemetryEnrichmentsRequest $args)
    {
        $result = parent::listThirdPartyTelemetryEnrichments($args->toArray());
        return new ListThirdPartyTelemetryEnrichmentsResponse($result->toArray());
    }
}
