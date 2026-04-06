<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\GetDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetDashboardRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
