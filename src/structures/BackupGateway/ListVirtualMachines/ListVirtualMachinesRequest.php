<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ListVirtualMachines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HypervisorArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListVirtualMachinesRequest extends Request
{
    /**
     * @param array{
     *     HypervisorArn?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
