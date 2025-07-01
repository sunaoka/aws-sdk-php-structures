<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartTrainedModelInferenceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $name
 * @property string $trainedModelArn
 * @property string|null $trainedModelVersionIdentifier
 * @property string|null $configuredModelAlgorithmAssociationArn
 * @property Shapes\InferenceResourceConfig $resourceConfig
 * @property Shapes\InferenceOutputConfiguration $outputConfiguration
 * @property Shapes\ModelInferenceDataSource $dataSource
 * @property string|null $description
 * @property Shapes\InferenceContainerExecutionParameters|null $containerExecutionParameters
 * @property array<string, string>|null $environment
 * @property string|null $kmsKeyArn
 * @property array<string, string>|null $tags
 */
class StartTrainedModelInferenceJobRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     name: string,
     *     trainedModelArn: string,
     *     trainedModelVersionIdentifier?: string|null,
     *     configuredModelAlgorithmAssociationArn?: string|null,
     *     resourceConfig: Shapes\InferenceResourceConfig,
     *     outputConfiguration: Shapes\InferenceOutputConfiguration,
     *     dataSource: Shapes\ModelInferenceDataSource,
     *     description?: string|null,
     *     containerExecutionParameters?: Shapes\InferenceContainerExecutionParameters|null,
     *     environment?: array<string, string>|null,
     *     kmsKeyArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
