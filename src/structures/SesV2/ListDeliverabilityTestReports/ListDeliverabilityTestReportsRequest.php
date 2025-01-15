<?php

namespace Sunaoka\Aws\Structures\SesV2\ListDeliverabilityTestReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int|null $PageSize
 */
class ListDeliverabilityTestReportsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     PageSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
