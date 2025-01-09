<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $JobNames
 * @property string $CronExpression
 * @property array<string, string> $Tags
 * @property string $Name
 */
class CreateScheduleRequest extends Request
{
    /**
     * @param array{
     *     JobNames?: list<string>,
     *     CronExpression: string,
     *     Tags?: array<string, string>,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
