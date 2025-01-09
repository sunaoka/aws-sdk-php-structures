<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotFleetRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $SpotFleetRequestIds
 * @property bool $TerminateInstances
 */
class CancelSpotFleetRequestsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     SpotFleetRequestIds: list<string>,
     *     TerminateInstances: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
