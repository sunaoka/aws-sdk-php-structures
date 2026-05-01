<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DashboardName
 * @property string $DashboardBody
 * @property list<Shapes\Tag>|null $Tags
 */
class PutDashboardRequest extends Request
{
    /**
     * @param array{
     *     DashboardName: string,
     *     DashboardBody: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
