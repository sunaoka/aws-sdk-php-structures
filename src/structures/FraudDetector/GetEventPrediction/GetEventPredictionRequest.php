<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string $detectorVersionId
 * @property string $eventId
 * @property string $eventTypeName
 * @property list<Shapes\Entity> $entities
 * @property string $eventTimestamp
 * @property array<string, string> $eventVariables
 * @property array<string, Shapes\ModelEndpointDataBlob> $externalModelEndpointDataBlobs
 */
class GetEventPredictionRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     detectorVersionId?: string,
     *     eventId: string,
     *     eventTypeName: string,
     *     entities: list<Shapes\Entity>,
     *     eventTimestamp: string,
     *     eventVariables: array<string, string>,
     *     externalModelEndpointDataBlobs?: array<string, Shapes\ModelEndpointDataBlob>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
