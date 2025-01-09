<?php

namespace Sunaoka\Aws\Structures\Lambda\PutProvisionedConcurrencyConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Qualifier
 * @property int $ProvisionedConcurrentExecutions
 */
class PutProvisionedConcurrencyConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier: string,
     *     ProvisionedConcurrentExecutions: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
