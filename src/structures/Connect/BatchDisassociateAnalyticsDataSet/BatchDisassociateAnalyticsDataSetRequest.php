<?php

namespace Sunaoka\Aws\Structures\Connect\BatchDisassociateAnalyticsDataSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<string> $DataSetIds
 * @property string|null $TargetAccountId
 */
class BatchDisassociateAnalyticsDataSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataSetIds: list<string>,
     *     TargetAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
