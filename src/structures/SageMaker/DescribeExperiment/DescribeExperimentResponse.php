<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeExperiment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ExperimentName
 * @property string|null $ExperimentArn
 * @property string|null $DisplayName
 * @property Shapes\ExperimentSource|null $Source
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 */
class DescribeExperimentResponse extends Response
{
}
