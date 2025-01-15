<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ActionName
 * @property string|null $ActionArn
 * @property Shapes\ActionSource|null $Source
 * @property string|null $ActionType
 * @property string|null $Description
 * @property 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null $Status
 * @property array<string, string>|null $Properties
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 * @property Shapes\MetadataProperties|null $MetadataProperties
 * @property string|null $LineageGroupArn
 */
class DescribeActionResponse extends Response
{
}
