<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateRefreshSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property string $AwsAccountId
 * @property Shapes\RefreshSchedule $Schedule
 */
class CreateRefreshScheduleRequest extends Request
{
    /**
     * @param array{
     *     DataSetId: string,
     *     AwsAccountId: string,
     *     Schedule: Shapes\RefreshSchedule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
