<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $JobNames
 * @property string $CronExpression
 * @property string $Name
 */
class UpdateScheduleRequest extends Request
{
    /**
     * @param array{
     *     JobNames?: list<string>,
     *     CronExpression: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
