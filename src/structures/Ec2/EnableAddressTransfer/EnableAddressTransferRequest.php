<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableAddressTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AllocationId
 * @property string $TransferAccountId
 * @property bool $DryRun
 */
class EnableAddressTransferRequest extends Request
{
    /**
     * @param array{
     *     AllocationId: string,
     *     TransferAccountId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
