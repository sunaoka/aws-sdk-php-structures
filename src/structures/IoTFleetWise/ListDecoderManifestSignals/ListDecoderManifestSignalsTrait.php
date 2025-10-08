<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestSignals;

trait ListDecoderManifestSignalsTrait
{
    /**
     * @param ListDecoderManifestSignalsRequest $args
     * @return ListDecoderManifestSignalsResponse
     */
    public function listDecoderManifestSignals(ListDecoderManifestSignalsRequest $args)
    {
        $result = parent::listDecoderManifestSignals($args->toArray());
        return new ListDecoderManifestSignalsResponse($result->toArray());
    }
}
