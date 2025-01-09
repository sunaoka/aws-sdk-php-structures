<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotInstanceRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $SpotInstanceRequestIds
 */
class CancelSpotInstanceRequestsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     SpotInstanceRequestIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
