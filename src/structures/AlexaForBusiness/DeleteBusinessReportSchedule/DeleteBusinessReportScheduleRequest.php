<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteBusinessReportSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduleArn
 */
class DeleteBusinessReportScheduleRequest extends Request
{
    /**
     * @param array{ScheduleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
