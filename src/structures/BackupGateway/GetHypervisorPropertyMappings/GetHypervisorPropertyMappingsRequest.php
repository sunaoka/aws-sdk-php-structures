<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetHypervisorPropertyMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HypervisorArn
 */
class GetHypervisorPropertyMappingsRequest extends Request
{
    /**
     * @param array{HypervisorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
