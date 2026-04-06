<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetConfigurationCheckOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OperationId
 */
class GetConfigurationCheckOperationRequest extends Request
{
    /**
     * @param array{OperationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
