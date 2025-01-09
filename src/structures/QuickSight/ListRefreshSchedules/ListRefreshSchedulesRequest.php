<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListRefreshSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DataSetId
 */
class ListRefreshSchedulesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DataSetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
