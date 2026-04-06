<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateTrainedModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $name
 * @property string $configuredModelAlgorithmAssociationArn
 * @property array<string, string>|null $hyperparameters
 * @property array<string, string>|null $environment
 * @property Shapes\ResourceConfig $resourceConfig
 * @property Shapes\StoppingCondition|null $stoppingCondition
 * @property list<Shapes\ModelTrainingDataChannel> $dataChannels
 * @property string|null $description
 * @property string|null $kmsKeyArn
 * @property array<string, string>|null $tags
 */
class CreateTrainedModelRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     name: string,
     *     configuredModelAlgorithmAssociationArn: string,
     *     hyperparameters?: array<string, string>|null,
     *     environment?: array<string, string>|null,
     *     resourceConfig: Shapes\ResourceConfig,
     *     stoppingCondition?: Shapes\StoppingCondition|null,
     *     dataChannels: list<Shapes\ModelTrainingDataChannel>,
     *     description?: string|null,
     *     kmsKeyArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
