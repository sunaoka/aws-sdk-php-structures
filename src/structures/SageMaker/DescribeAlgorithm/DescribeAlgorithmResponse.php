<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AlgorithmName
 * @property string $AlgorithmArn
 * @property string $AlgorithmDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\TrainingSpecification $TrainingSpecification
 * @property Shapes\InferenceSpecification $InferenceSpecification
 * @property Shapes\AlgorithmValidationSpecification $ValidationSpecification
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting' $AlgorithmStatus
 * @property Shapes\AlgorithmStatusDetails $AlgorithmStatusDetails
 * @property string $ProductId
 * @property bool $CertifyForMarketplace
 */
class DescribeAlgorithmResponse extends Response
{
}
