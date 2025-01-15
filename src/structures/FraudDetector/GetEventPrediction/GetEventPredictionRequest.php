<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string|null $detectorVersionId
 * @property string $eventId
 * @property string $eventTypeName
 * @property list<Shapes\Entity> $entities
 * @property string $eventTimestamp
 * @property array<string, string> $eventVariables
 * @property array<string, Shapes\ModelEndpointDataBlob>|null $externalModelEndpointDataBlobs
 */
class GetEventPredictionRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     detectorVersionId?: string|null,
     *     eventId: string,
     *     eventTypeName: string,
     *     entities: list<Shapes\Entity>,
     *     eventTimestamp: string,
     *     eventVariables: array<string, string>,
     *     externalModelEndpointDataBlobs?: array<string, Shapes\ModelEndpointDataBlob>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
