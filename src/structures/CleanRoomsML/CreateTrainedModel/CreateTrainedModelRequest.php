<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateTrainedModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $name
 * @property string $configuredModelAlgorithmAssociationArn
 * @property array<string, string> $hyperparameters
 * @property array<string, string> $environment
 * @property Shapes\ResourceConfig $resourceConfig
 * @property Shapes\StoppingCondition $stoppingCondition
 * @property list<Shapes\ModelTrainingDataChannel> $dataChannels
 * @property string $description
 * @property string $kmsKeyArn
 * @property array<string, string> $tags
 */
class CreateTrainedModelRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     name: string,
     *     configuredModelAlgorithmAssociationArn: string,
     *     hyperparameters?: array<string, string>,
     *     environment?: array<string, string>,
     *     resourceConfig: Shapes\ResourceConfig,
     *     stoppingCondition?: Shapes\StoppingCondition,
     *     dataChannels: list<Shapes\ModelTrainingDataChannel>,
     *     description?: string,
     *     kmsKeyArn?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
