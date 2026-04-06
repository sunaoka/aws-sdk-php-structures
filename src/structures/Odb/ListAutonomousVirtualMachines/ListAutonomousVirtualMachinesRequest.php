<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousVirtualMachines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string $cloudAutonomousVmClusterId
 */
class ListAutonomousVirtualMachinesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     cloudAutonomousVmClusterId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
