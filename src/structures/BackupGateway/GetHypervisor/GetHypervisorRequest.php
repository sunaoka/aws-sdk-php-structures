<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetHypervisor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HypervisorArn
 */
class GetHypervisorRequest extends Request
{
    /**
     * @param array{HypervisorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
