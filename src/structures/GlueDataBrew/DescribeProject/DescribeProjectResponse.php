<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $CreatedBy
 * @property string $DatasetName
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $LastModifiedBy
 * @property string $Name
 * @property string $RecipeName
 * @property string $ResourceArn
 * @property Shapes\Sample $Sample
 * @property string $RoleArn
 * @property array<string, string> $Tags
 * @property 'ASSIGNED'|'FAILED'|'INITIALIZING'|'PROVISIONING'|'READY'|'RECYCLING'|'ROTATING'|'TERMINATED'|'TERMINATING'|'UPDATING' $SessionStatus
 * @property string $OpenedBy
 * @property \Aws\Api\DateTimeResult $OpenDate
 */
class DescribeProjectResponse extends Response
{
}
