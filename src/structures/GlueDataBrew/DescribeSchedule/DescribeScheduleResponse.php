<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $CreatedBy
 * @property list<string> $JobNames
 * @property string $LastModifiedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $ResourceArn
 * @property string $CronExpression
 * @property array<string, string> $Tags
 * @property string $Name
 */
class DescribeScheduleResponse extends Response
{
}
