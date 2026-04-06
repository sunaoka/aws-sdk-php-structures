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
 * @property list<Shapes\IncrementalTrainingDataChannel>|null $incrementalTrainingDataChannels
 * @property list<Shapes\ModelTrainingDataChannel> $dataChannels
 * @property 'File'|'FastFile'|'Pipe'|null $trainingInputMode
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
     *     incrementalTrainingDataChannels?: list<Shapes\IncrementalTrainingDataChannel>|null,
     *     dataChannels: list<Shapes\ModelTrainingDataChannel>,
     *     trainingInputMode?: 'File'|'FastFile'|'Pipe'|null,
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
