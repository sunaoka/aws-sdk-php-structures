<?php

namespace Sunaoka\Aws\Structures\BackupGateway\DeleteHypervisor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HypervisorArn
 */
class DeleteHypervisorRequest extends Request
{
    /**
     * @param array{HypervisorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
