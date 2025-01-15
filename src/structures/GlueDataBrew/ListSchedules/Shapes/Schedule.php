<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property list<string>|null $JobNames
 * @property string|null $LastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $ResourceArn
 * @property string|null $CronExpression
 * @property array<string, string>|null $Tags
 * @property string $Name
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     CreatedBy?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     JobNames?: list<string>|null,
     *     LastModifiedBy?: string|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     ResourceArn?: string|null,
     *     CronExpression?: string|null,
     *     Tags?: array<string, string>|null,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
