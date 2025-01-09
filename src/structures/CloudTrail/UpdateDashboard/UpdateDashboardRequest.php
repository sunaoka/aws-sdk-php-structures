<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DashboardId
 * @property list<Shapes\RequestWidget> $Widgets
 * @property Shapes\RefreshSchedule $RefreshSchedule
 * @property bool $TerminationProtectionEnabled
 */
class UpdateDashboardRequest extends Request
{
    /**
     * @param array{
     *     DashboardId: string,
     *     Widgets?: list<Shapes\RequestWidget>,
     *     RefreshSchedule?: Shapes\RefreshSchedule,
     *     TerminationProtectionEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
