<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $JobNames
 * @property string $CronExpression
 * @property string $Name
 */
class UpdateScheduleRequest extends Request
{
    /**
     * @param array{
     *     JobNames?: list<string>|null,
     *     CronExpression: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
