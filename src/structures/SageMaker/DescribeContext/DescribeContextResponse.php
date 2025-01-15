<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeContext;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ContextName
 * @property string|null $ContextArn
 * @property Shapes\ContextSource|null $Source
 * @property string|null $ContextType
 * @property string|null $Description
 * @property array<string, string>|null $Properties
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 * @property string|null $LineageGroupArn
 */
class DescribeContextResponse extends Response
{
}
