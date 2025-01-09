<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateRefreshSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property string $AwsAccountId
 * @property Shapes\RefreshSchedule $Schedule
 */
class UpdateRefreshScheduleRequest extends Request
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
