<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ListVirtualMachines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $HypervisorArn
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 */
class ListVirtualMachinesRequest extends Request
{
    /**
     * @param array{
     *     HypervisorArn?: string|null,
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
