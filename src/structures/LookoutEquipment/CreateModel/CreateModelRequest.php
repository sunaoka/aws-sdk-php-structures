<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property string $DatasetName
 * @property Shapes\DatasetSchema $DatasetSchema
 * @property Shapes\LabelsInputConfiguration $LabelsInputConfiguration
 * @property string $ClientToken
 * @property \Aws\Api\DateTimeResult $TrainingDataStartTime
 * @property \Aws\Api\DateTimeResult $TrainingDataEndTime
 * @property \Aws\Api\DateTimeResult $EvaluationDataStartTime
 * @property \Aws\Api\DateTimeResult $EvaluationDataEndTime
 * @property string $RoleArn
 * @property Shapes\DataPreProcessingConfiguration $DataPreProcessingConfiguration
 * @property string $ServerSideKmsKeyId
 * @property list<Shapes\Tag> $Tags
 * @property string $OffCondition
 * @property Shapes\ModelDiagnosticsOutputConfiguration $ModelDiagnosticsOutputConfiguration
 */
class CreateModelRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     DatasetName: string,
     *     DatasetSchema?: Shapes\DatasetSchema,
     *     LabelsInputConfiguration?: Shapes\LabelsInputConfiguration,
     *     ClientToken: string,
     *     TrainingDataStartTime?: \Aws\Api\DateTimeResult,
     *     TrainingDataEndTime?: \Aws\Api\DateTimeResult,
     *     EvaluationDataStartTime?: \Aws\Api\DateTimeResult,
     *     EvaluationDataEndTime?: \Aws\Api\DateTimeResult,
     *     RoleArn?: string,
     *     DataPreProcessingConfiguration?: Shapes\DataPreProcessingConfiguration,
     *     ServerSideKmsKeyId?: string,
     *     Tags?: list<Shapes\Tag>,
     *     OffCondition?: string,
     *     ModelDiagnosticsOutputConfiguration?: Shapes\ModelDiagnosticsOutputConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
