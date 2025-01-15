<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotFleetRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string> $SpotFleetRequestIds
 * @property bool $TerminateInstances
 */
class CancelSpotFleetRequestsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     SpotFleetRequestIds: list<string>,
     *     TerminateInstances: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
