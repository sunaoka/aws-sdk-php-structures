<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DisassociateElasticIp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ElasticIp
 */
class DisassociateElasticIpRequest extends Request
{
    /**
     * @param array{ElasticIp: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
