<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\RefreshSchedule|null $RefreshSchedule
 * @property list<Shapes\Tag>|null $TagsList
 * @property bool|null $TerminationProtectionEnabled
 * @property list<Shapes\RequestWidget>|null $Widgets
 */
class CreateDashboardRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RefreshSchedule?: Shapes\RefreshSchedule|null,
     *     TagsList?: list<Shapes\Tag>|null,
     *     TerminationProtectionEnabled?: bool|null,
     *     Widgets?: list<Shapes\RequestWidget>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
