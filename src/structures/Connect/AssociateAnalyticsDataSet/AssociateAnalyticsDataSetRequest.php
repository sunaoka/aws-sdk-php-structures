<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateAnalyticsDataSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $DataSetId
 * @property string $TargetAccountId
 */
class AssociateAnalyticsDataSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataSetId: string,
     *     TargetAccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
