<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteRefreshSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property string $AwsAccountId
 * @property string $ScheduleId
 */
class DeleteRefreshScheduleRequest extends Request
{
    /**
     * @param array{
     *     DataSetId: string,
     *     AwsAccountId: string,
     *     ScheduleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
