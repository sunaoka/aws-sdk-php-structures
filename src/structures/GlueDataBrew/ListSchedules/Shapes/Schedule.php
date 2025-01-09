<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property list<string> $JobNames
 * @property string $LastModifiedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $ResourceArn
 * @property string $CronExpression
 * @property array<string, string> $Tags
 * @property string $Name
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     CreatedBy?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     JobNames?: list<string>,
     *     LastModifiedBy?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     ResourceArn?: string,
     *     CronExpression?: string,
     *     Tags?: array<string, string>,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
