<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string|null $CreatedBy
 * @property list<string>|null $JobNames
 * @property string|null $LastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $ResourceArn
 * @property string|null $CronExpression
 * @property array<string, string>|null $Tags
 * @property string $Name
 */
class DescribeScheduleResponse extends Response
{
}
