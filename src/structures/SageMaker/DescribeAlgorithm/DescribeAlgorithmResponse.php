<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AlgorithmName
 * @property string $AlgorithmArn
 * @property string|null $AlgorithmDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\TrainingSpecification $TrainingSpecification
 * @property Shapes\InferenceSpecification|null $InferenceSpecification
 * @property Shapes\AlgorithmValidationSpecification|null $ValidationSpecification
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting' $AlgorithmStatus
 * @property Shapes\AlgorithmStatusDetails $AlgorithmStatusDetails
 * @property string|null $ProductId
 * @property bool|null $CertifyForMarketplace
 */
class DescribeAlgorithmResponse extends Response
{
}
