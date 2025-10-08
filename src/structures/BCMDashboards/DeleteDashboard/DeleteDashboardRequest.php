<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\DeleteDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteDashboardRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
