<?php

namespace Sunaoka\Aws\Structures\Lambda\GetProvisionedConcurrencyConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Qualifier
 */
class GetProvisionedConcurrencyConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
