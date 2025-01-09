<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\RefreshSchedule $RefreshSchedule
 * @property list<Shapes\Tag> $TagsList
 * @property bool $TerminationProtectionEnabled
 * @property list<Shapes\RequestWidget> $Widgets
 */
class CreateDashboardRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RefreshSchedule?: Shapes\RefreshSchedule,
     *     TagsList?: list<Shapes\Tag>,
     *     TerminationProtectionEnabled?: bool,
     *     Widgets?: list<Shapes\RequestWidget>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
