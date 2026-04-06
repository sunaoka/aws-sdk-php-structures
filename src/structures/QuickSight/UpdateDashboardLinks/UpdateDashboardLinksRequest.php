<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboardLinks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property list<string> $LinkEntities
 */
class UpdateDashboardLinksRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     LinkEntities: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
