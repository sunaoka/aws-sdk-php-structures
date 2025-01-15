<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCodeRepository;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CodeRepositoryName
 * @property string $CodeRepositoryArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\GitConfig|null $GitConfig
 */
class DescribeCodeRepositoryResponse extends Response
{
}
