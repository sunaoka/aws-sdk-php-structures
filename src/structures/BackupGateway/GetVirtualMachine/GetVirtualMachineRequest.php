<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetVirtualMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class GetVirtualMachineRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
