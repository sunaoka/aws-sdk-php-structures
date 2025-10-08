<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeComputationModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $computationModelId
 * @property string $computationModelArn
 * @property string $computationModelName
 * @property string|null $computationModelDescription
 * @property Shapes\ComputationModelConfiguration $computationModelConfiguration
 * @property array<string, Shapes\ComputationModelDataBindingValue> $computationModelDataBinding
 * @property \Aws\Api\DateTimeResult $computationModelCreationDate
 * @property \Aws\Api\DateTimeResult $computationModelLastUpdateDate
 * @property Shapes\ComputationModelStatus $computationModelStatus
 * @property string $computationModelVersion
 * @property list<Shapes\ActionDefinition> $actionDefinitions
 */
class DescribeComputationModelResponse extends Response
{
}
