<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeExperiment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ExperimentName
 * @property string $ExperimentArn
 * @property string $DisplayName
 * @property Shapes\ExperimentSource $Source
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $LastModifiedBy
 */
class DescribeExperimentResponse extends Response
{
}
