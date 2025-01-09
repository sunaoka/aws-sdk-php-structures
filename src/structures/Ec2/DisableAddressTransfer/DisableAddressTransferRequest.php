<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableAddressTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AllocationId
 * @property bool $DryRun
 */
class DisableAddressTransferRequest extends Request
{
    /**
     * @param array{
     *     AllocationId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
