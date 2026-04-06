<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateAnalyticsDataSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $DataSetId
 * @property string|null $TargetAccountId
 */
class AssociateAnalyticsDataSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataSetId: string,
     *     TargetAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
