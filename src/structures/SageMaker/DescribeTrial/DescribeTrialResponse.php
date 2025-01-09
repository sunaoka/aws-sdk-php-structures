<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrial;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TrialName
 * @property string $TrialArn
 * @property string $DisplayName
 * @property string $ExperimentName
 * @property Shapes\TrialSource $Source
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $LastModifiedBy
 * @property Shapes\MetadataProperties $MetadataProperties
 */
class DescribeTrialResponse extends Response
{
}
