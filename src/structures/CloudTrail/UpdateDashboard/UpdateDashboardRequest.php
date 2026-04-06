<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DashboardId
 * @property list<Shapes\RequestWidget>|null $Widgets
 * @property Shapes\RefreshSchedule|null $RefreshSchedule
 * @property bool|null $TerminationProtectionEnabled
 */
class UpdateDashboardRequest extends Request
{
    /**
     * @param array{
     *     DashboardId: string,
     *     Widgets?: list<Shapes\RequestWidget>|null,
     *     RefreshSchedule?: Shapes\RefreshSchedule|null,
     *     TerminationProtectionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
