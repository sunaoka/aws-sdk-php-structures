<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $JobNames
 * @property string $CronExpression
 * @property array<string, string>|null $Tags
 * @property string $Name
 */
class CreateScheduleRequest extends Request
{
    /**
     * @param array{
     *     JobNames?: list<string>|null,
     *     CronExpression: string,
     *     Tags?: array<string, string>|null,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
