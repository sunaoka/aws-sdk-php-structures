<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ActionName
 * @property string $ActionArn
 * @property Shapes\ActionSource $Source
 * @property string $ActionType
 * @property string $Description
 * @property 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $Status
 * @property array<string, string> $Properties
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $LastModifiedBy
 * @property Shapes\MetadataProperties $MetadataProperties
 * @property string $LineageGroupArn
 */
class DescribeActionResponse extends Response
{
}
