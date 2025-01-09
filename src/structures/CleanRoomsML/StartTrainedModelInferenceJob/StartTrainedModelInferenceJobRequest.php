<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartTrainedModelInferenceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $name
 * @property string $trainedModelArn
 * @property string $configuredModelAlgorithmAssociationArn
 * @property Shapes\InferenceResourceConfig $resourceConfig
 * @property Shapes\InferenceOutputConfiguration $outputConfiguration
 * @property Shapes\ModelInferenceDataSource $dataSource
 * @property string $description
 * @property Shapes\InferenceContainerExecutionParameters $containerExecutionParameters
 * @property array<string, string> $environment
 * @property string $kmsKeyArn
 * @property array<string, string> $tags
 */
class StartTrainedModelInferenceJobRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     name: string,
     *     trainedModelArn: string,
     *     configuredModelAlgorithmAssociationArn?: string,
     *     resourceConfig: Shapes\InferenceResourceConfig,
     *     outputConfiguration: Shapes\InferenceOutputConfiguration,
     *     dataSource: Shapes\ModelInferenceDataSource,
     *     description?: string,
     *     containerExecutionParameters?: Shapes\InferenceContainerExecutionParameters,
     *     environment?: array<string, string>,
     *     kmsKeyArn?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
