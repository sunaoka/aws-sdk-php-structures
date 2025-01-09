<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeContext;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ContextName
 * @property string $ContextArn
 * @property Shapes\ContextSource $Source
 * @property string $ContextType
 * @property string $Description
 * @property array<string, string> $Properties
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $LastModifiedBy
 * @property string $LineageGroupArn
 */
class DescribeContextResponse extends Response
{
}
