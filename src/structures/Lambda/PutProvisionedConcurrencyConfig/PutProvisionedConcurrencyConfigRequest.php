<?php

namespace Sunaoka\Aws\Structures\Lambda\PutProvisionedConcurrencyConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Qualifier
 * @property int<1, max> $ProvisionedConcurrentExecutions
 */
class PutProvisionedConcurrencyConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier: string,
     *     ProvisionedConcurrentExecutions: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
