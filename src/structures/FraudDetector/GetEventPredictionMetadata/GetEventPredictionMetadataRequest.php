<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventId
 * @property string $eventTypeName
 * @property string $detectorId
 * @property string $detectorVersionId
 * @property string $predictionTimestamp
 */
class GetEventPredictionMetadataRequest extends Request
{
    /**
     * @param array{
     *     eventId: string,
     *     eventTypeName: string,
     *     detectorId: string,
     *     detectorVersionId: string,
     *     predictionTimestamp: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
