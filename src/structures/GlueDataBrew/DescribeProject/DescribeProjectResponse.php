<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string|null $CreatedBy
 * @property string|null $DatasetName
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $LastModifiedBy
 * @property string $Name
 * @property string|null $RecipeName
 * @property string|null $ResourceArn
 * @property Shapes\Sample|null $Sample
 * @property string|null $RoleArn
 * @property array<string, string>|null $Tags
 * @property 'ASSIGNED'|'FAILED'|'INITIALIZING'|'PROVISIONING'|'READY'|'RECYCLING'|'ROTATING'|'TERMINATED'|'TERMINATING'|'UPDATING'|null $SessionStatus
 * @property string|null $OpenedBy
 * @property \Aws\Api\DateTimeResult|null $OpenDate
 */
class DescribeProjectResponse extends Response
{
}
