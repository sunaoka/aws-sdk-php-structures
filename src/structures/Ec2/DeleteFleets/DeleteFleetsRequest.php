<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string> $FleetIds
 * @property bool $TerminateInstances
 */
class DeleteFleetsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     FleetIds: list<string>,
     *     TerminateInstances: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
