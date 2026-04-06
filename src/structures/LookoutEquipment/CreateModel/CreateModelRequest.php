<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property string $DatasetName
 * @property Shapes\DatasetSchema|null $DatasetSchema
 * @property Shapes\LabelsInputConfiguration|null $LabelsInputConfiguration
 * @property string $ClientToken
 * @property \Aws\Api\DateTimeResult|null $TrainingDataStartTime
 * @property \Aws\Api\DateTimeResult|null $TrainingDataEndTime
 * @property \Aws\Api\DateTimeResult|null $EvaluationDataStartTime
 * @property \Aws\Api\DateTimeResult|null $EvaluationDataEndTime
 * @property string|null $RoleArn
 * @property Shapes\DataPreProcessingConfiguration|null $DataPreProcessingConfiguration
 * @property string|null $ServerSideKmsKeyId
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $OffCondition
 * @property Shapes\ModelDiagnosticsOutputConfiguration|null $ModelDiagnosticsOutputConfiguration
 */
class CreateModelRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     DatasetName: string,
     *     DatasetSchema?: Shapes\DatasetSchema|null,
     *     LabelsInputConfiguration?: Shapes\LabelsInputConfiguration|null,
     *     ClientToken: string,
     *     TrainingDataStartTime?: \Aws\Api\DateTimeResult|null,
     *     TrainingDataEndTime?: \Aws\Api\DateTimeResult|null,
     *     EvaluationDataStartTime?: \Aws\Api\DateTimeResult|null,
     *     EvaluationDataEndTime?: \Aws\Api\DateTimeResult|null,
     *     RoleArn?: string|null,
     *     DataPreProcessingConfiguration?: Shapes\DataPreProcessingConfiguration|null,
     *     ServerSideKmsKeyId?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     OffCondition?: string|null,
     *     ModelDiagnosticsOutputConfiguration?: Shapes\ModelDiagnosticsOutputConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
