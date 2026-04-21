<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIWorkloadConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AIWorkloadConfigName
 * @property string $AIWorkloadConfigArn
 * @property Shapes\AIDatasetConfig|null $DatasetConfig
 * @property Shapes\AIWorkloadConfigs|null $AIWorkloadConfigs
 * @property list<Shapes\Tag>|null $Tags
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class DescribeAIWorkloadConfigResponse extends Response
{
}
