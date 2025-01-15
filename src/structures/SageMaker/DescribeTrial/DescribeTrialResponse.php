<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrial;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TrialName
 * @property string|null $TrialArn
 * @property string|null $DisplayName
 * @property string|null $ExperimentName
 * @property Shapes\TrialSource|null $Source
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 * @property Shapes\MetadataProperties|null $MetadataProperties
 */
class DescribeTrialResponse extends Response
{
}
